<template>
    <div>
        <h1>{{ blog.title }}</h1>
        <p>{{ blog.content }}</p>
        <button @click="returnBack">Back</button>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            blog: {}
        };
    },
    created() {
        this.fetchBlog(this.$route.params.id);
    },
    methods: {
        fetchBlog(id) {
            axios.get(`/api/blogs/${id}`)
                .then(response => {
                    this.blog = response.data;
                });
        },
        returnBack(id) {
            this.$router.push('/view');
        },
    }
};
</script>