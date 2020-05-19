<template>
  <form @submit.prevent="handleSubmit">
    <div class="form-group">
      <label for="reminder">Reminder</label>
      <textarea name="reminder" id="reminder" class="form-control" v-model="reminder.reminder"></textarea>
      <div v-if="$page.errors.reminder" class="error">{{ $page.errors.reminder[0] }}</div>
    </div>

    <div class="form-group">
      <label for="date">Reminder date</label>
      <input
        type="date"
        name="date"
        id="date"
        class="form-control"
        v-model="reminder.reminder_date"
      />
      <div v-if="$page.errors.reminder_date" class="error">{{ $page.errors.reminder_date[0] }}</div>
    </div>

    <button class="btn btn-success">Save</button>
  </form>
</template>

<script>
    export default {
        props: {
            mainReminder: Object
        },
        data() {
            return {
            reminder: {
                reminder: "",
                reminder_date: ""
            }
            };
        },
        created() {
            this.reminder = this.mainReminder;
        },
        methods: {
            handleSubmit() {
                this.$emit('reminderSubmit', this.reminder);
            }
        }
    }
</script>