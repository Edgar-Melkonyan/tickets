<template>
    <form @submit.prevent="submit">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" v-model="fields.name" />
            <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" name="phone" id="phone" v-model="fields.phone" />
            <div v-if="errors && errors.phone" class="text-danger">{{ errors.phone[0] }}</div>
        </div>

        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" id="text" name="text" rows="5" v-model="fields.text"></textarea>
            <div v-if="errors && errors.text" class="text-danger">{{ errors.text[0] }}</div>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type" v-model="fields.type">
                <option value="FILE">File</option>
                <option value="MYSQL">MySQL</option>
            </select>
            <div v-if="errors && errors.type" class="text-danger">{{ errors.type[0] }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>

        <div v-if="success" class="alert alert-success mt-3">
            Message sent!
        </div>

    </form>
</template>

<script>
    export default {
        data() {
            return {
                fields: {},
                errors: {},
                success: false,
            }
        },
        methods: {
            submit() {
                this.success = false;
                this.errors = {};
                axios.post('/ticket', this.fields).then(response => {
                    this.success = true;
                    this.fields = {};
                }).catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
            },
        },
    }
</script>