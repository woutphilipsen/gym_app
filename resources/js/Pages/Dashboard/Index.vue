<template>
    <div>
        <p>This is the dashboard, welcome {{ fname }} {{ lname }}</p>
    </div>
</template>

<<script>
export default {
    props: [
        'fname', 'lname',
    ]
}
</script>