<template>
  <layout>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>
            <inertia-link :href="$route('lead.list')">Leads</inertia-link>
            <span class="breadcrumb-sp">/</span>
            <inertia-link :href="$route('lead.list', {lead: lead})">Lead details</inertia-link>
            <span class="breadcrumb-sp">/</span>
            Add reminder
          </h1>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">Add Reminder</div>
                  <div class="card-body">
                      <form @submit.prevent="handleSubmit">
                          <div class="form-group">
                              <label for="reminder">Reminder</label>
                              <textarea name="reminder" id="reminder" class="form-control" v-model="reminder.reminder"></textarea>
                              <div v-if="$page.errors.reminder" class="error">{{ $page.errors.reminder[0] }}</div>
                          </div>

                          <div class="form-group">
                              <label for="date">Reminder date</label>
                              <input type="date" name="date" id="date" class="form-control" v-model="reminder.reminder_date">
                              <div v-if="$page.errors.reminder_date" class="error">{{ $page.errors.reminder_date[0] }}</div>
                          </div>

                          <button class="btn btn-success">Save</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </layout>
</template>

<script>
    import Layout from "./../../Shared/Layout";
    export default {
        props: {
            lead: Object
        },
        components: {
            Layout
        },
        data() {
            return {
                reminder: {
                    reminder: '',
                    reminder_date: ''
                }
            }
        },
        methods: {
            handleSubmit() {
                const postData = {
                    reminder: this.reminder.reminder,
                    reminder_date: this.reminder.reminder_date,
                    lead_id: this.lead.id
                }
                this.$inertia.post(route('reminder.save'), postData);
            }
        }
    };
</script>