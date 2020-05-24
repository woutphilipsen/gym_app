<template>
  <div>
    <h3>Reminders list for today</h3>
    <div>
    <div class="card" v-for="reminder in reminders" :key="reminder.id" style="margin-top: 1em;">
      <div class="card-header">Contact email:  <strong>{{ reminder.lead.email }}</strong></div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <inertia-link
              :href="$route('reminder.view', {lead: reminder.lead, reminder: reminder})"
            >
              <strong>{{ reminder.lead.name }}</strong>
              <br />
              {{ reminder.reminder }}
            </inertia-link>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</template>

<script>
export default {
  props: {
    reminders: Array
  }
};
</script>