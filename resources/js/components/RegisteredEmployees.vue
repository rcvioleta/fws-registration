<template>
  <div id="employees">
    <div class="form-group">
      <input
        type="text"
        name="employee_id"
        class="form-control"
        placeholder="Search employee by last name"
        v-model="searchKey"
      >
    </div>
    <table v-if="employees" class="table table-striped mt-4">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Employee ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Project</th>
          <th scope="col">Registered</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="employee in filteredEmployees" :key="employee.emp_id">
          <td>{{ employee.emp_id }}</td>
          <td>{{ employee.first_name }}</td>
          <td>{{ employee.last_name }}</td>
          <td>{{ employee.project }}</td>
          <td class="text-center">
            <strong class="text-success" disabled v-if="employee.registered">Yes</strong>
            <strong class="text-danger" disabled v-else>No</strong>
          </td>
        </tr>
      </tbody>
    </table>
    <strong v-else>Getting all employees. Please wait...</strong>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      employees: "",
      searchKey: ""
    };
  },
  created() {
    this.fetchAllEmployees();
  },
  methods: {
    fetchAllEmployees() {
      axios
        .get("/admin/employee")
        .then(result => {
          this.employees = result.data.data;
          console.log(result);
        })
        .catch(err => console.log("error found", err));
    }
  },
  computed: {
    filteredEmployees() {
      return this.employees.filter(employee => {
        return employee.last_name
          .toLowerCase()
          .match(this.searchKey.toLowerCase());
      });
    }
  }
};
</script>
