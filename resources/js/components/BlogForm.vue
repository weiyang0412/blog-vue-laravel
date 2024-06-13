<template>
    <div>
        <h1>{{ formTitle }}</h1>
        <form @submit.prevent="submitForm">
            <div>
                <label>Title:</label>
                <input v-model="blog.title" type="text">
            </div>
            <div>
                <label>Content:</label>
                <textarea v-model="blog.content"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script>
// import axios from 'axios';

export default {
    data() {
        return {
            blog: {
                title: '',
                content: ''
            },
            isEdit: false
        };
    },
    computed: {
        formTitle() {
            return this.isEdit ? 'Edit Blog' : 'Create Blog';
        }
    },
    created() {
        if (this.$route.params.id) {
            this.isEdit = true;
            this.fetchBlog(this.$route.params.id);
        }
    },
    methods: {
        fetchBlog(id) {
            axios.get(`/api/blogs/${id}`)
                .then(response => {
                    this.blog = response.data;
                });
        },
        async submitForm() {
            if (this.isEdit) {
                axios.put(`/api/blogs/${this.blog.id}`, this.blog)
                    .then(response => {
                        this.$router.push('/blogs/list');
                    });
            } else {
                await
                axios.post('/api/blogs', this.blog)
                    .then(response => {
                        this.$router.push('/blogs/list');
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        }
    }
};
</script>