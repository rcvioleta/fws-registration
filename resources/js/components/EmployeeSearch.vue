<template>
  <div id="main-app">
    <template v-if="!employees">Fetching users from database. Please wait...</template>
    <template v-else>
      <div class="form-group">
        <input
          type="text"
          name="employee_id"
          class="form-control"
          placeholder="Enter your EID"
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
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ filteredEmployee.emp_id }}</td>
              <td>{{ filteredEmployee.first_name }}</td>
              <td>{{ filteredEmployee.last_name }}</td>
              <td>{{ filteredEmployee.project }}</td>
              <td>
                <button class="btn btn-sm btn-success" disabled v-if="filteredEmployee.registered">All Set</button>
                <button class="btn btn-sm btn-primary" @click="registerEmployee(filteredEmployee.emp_id)" v-else>Register</button>
              </td>
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
import swal from 'sweetalert';

export default {
  data() {
    return {
      employees: "",
      filteredEmployee: "",
      searchKey: "",
      searchMessage: "Please enter your EID. Then hit the \"Register\" button once your info appear below."
    };
  },
  created() {
    this.fetchAllEmployees();
  },
  methods: {
    searchEmployees(event) {
      this.filteredEmployee = this.employees.find(
        employee => employee.emp_id === +this.searchKey
      );

      if (!this.filteredEmployee && this.searchKey) {
        this.searchMessage = "Employee not found";
      } else {
        this.searchMessage = "Please enter your EID. Then hit the \"Register\" button once your info appear below.";
      }
    },
    registerEmployee(id) {
      const uri = `/admin/employee/register/${id}`;
      axios
      .get(uri)
      .then(update => {
        console.log(update.data);
        this.filteredEmployee.registered = update.data.registered;
        swal('Movie Time!', update.data.message, 'success');
        this.fetchAllEmployees();
        this.searchKey = "";
        this.filteredEmployee = "";
      })
      .catch(err => console.log(err))
    },
    fetchAllEmployees() {
      axios
      .get("/admin/employee")
      .then(result => {
        this.employees = result.data.data;
        console.log(result);
      })
      .catch(err => console.log("error found", err));
    }
  }
};
</script>

<style>
</style>