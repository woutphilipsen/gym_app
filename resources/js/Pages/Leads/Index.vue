<template>
  <layout>
    <div class="container">
      <div class="row">
        <div class="row">
          <div class="col-md-12">
            <h1 style="margin-left:30%; margin-bottom:30px">Leads</h1>
          </div>
        </div>

        <div class="col-md-12">
          <table class="table table-bordered bg-white" style="text-align: center;">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Age</th>
              <th>Package</th>
              <th>Added On</th>
              <th>Edit</th>
            </tr>
            <tr v-for="lead in leads" :key="lead.id">
              <td>{{ lead.id }}</td>
              <td>{{ lead.name }}</td>
              <td>{{ lead.email }}</td>
              <td>{{ lead.phone }}</td>
              <td>{{ lead.age }}</td>
              <td>{{ lead.interested_package }}</td>
              <td>{{ lead.created_at }}</td>
              <td>
                <inertia-link :href="$route('lead.view', {lead: lead})">
                  <i class="fa fa-edit"></i>
                </inertia-link>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-12">
          <inertia-link class="btn btn-info" :href="$route('lead.add')" style="margin-top:30px; margin-right:10px; float:right;">Add lead</inertia-link>
        </div>
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from "./../../Shared/Layout";
export default {
  components: {
    Layout
  },
  props: ["leads"]
};
</script>