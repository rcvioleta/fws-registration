<template>
  <div id="main-app">
    <template v-if="!employees">Fetching users from database. Please wait...</template>
    <template v-else>
      <div class="form-group">
        <input
          type="text"
          name="employee_id"
          class="form-control"
          placeholder="Search Employee ID"
          v-model="searchKey"
          @input="searchEmployees"
        >
      </div>
      <template v-if="filteredEmployee">
        <table class="table mt-4">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Employee ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Project</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ filteredEmployee.emp_id }}</td>
              <td>{{ filteredEmployee.first_name }}</td>
              <td>{{ filteredEmployee.last_name }}</td>
              <td>{{ filteredEmployee.project }}</td>
            </tr>
          </tbody>
        </table>
      </template>
      <template v-else>
        <strong>{{ searchMessage }}</strong>
      </template>
    </template>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      employees: "",
      filteredEmployee: "",
      searchKey: "",
      searchMessage: "Waiting for searches"
    };
  },
  created() {
    axios
      .get("admin/employee")
      .then(result => {
        this.employees = result.data.data;
        console.log(result);
      })
      .catch(err => console.log("error found", err));
  },
  methods: {
    searchEmployees(event) {
      this.filteredEmployee = this.employees.find(
        employee => employee.emp_id === +this.searchKey
      );

      if (!this.filteredEmployee && this.searchKey) {
        this.searchMessage = "Employee not found";
      } else {
        this.searchMessage = "Waiting for searches";
      }
    }
  }
};
</script>

<style>
</style>