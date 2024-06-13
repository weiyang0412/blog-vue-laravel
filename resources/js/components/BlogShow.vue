<!-- <template>
    <div>
        <h1>Blog List</h1>
        <ul>
            <li v-for="blog in blogs" :key="blog.id">
                {{ blog.id + " " + blog.title }}
                <button @click="viewDetails(blog.id)">View Details</button>
            </li>
        </ul>
    </div>
</template> -->

<template>
    <div class="container mt-5">
        <h1 class="mb-4">Blog List</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="blog in blogs" :key="blog.id">
                    <td>{{ blog.id }}</td>
                    <td>
                        <router-view :to="'/blogs/' + blog.id">{{ blog.title }}</router-view>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-secondary me-2" @click="viewDetails(blog.id)">View Details</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            blogs: []
        };
    },
    created() {
        this.fetchBlogs();
    },
    methods: {
        fetchBlogs() {
            axios.get('/api/blogs')
                .then(response => {
                    this.blogs = response.data;
                });
        },
        // createBlog() {
        //     this.$router.push('/blogs/create');
        // },
        // async editBlog(id) {
        //     await
        //     this.$router.push('/blogs/edit/' + id);
        // },
        // deleteBlog(id) {
        //     axios.delete(`/api/blogs/${id}`)
        //         .then(response => {
        //             this.fetchBlogs();
        //         });
        // }
        viewDetails(id) {
            this.$router.push('/blogs/' + id);
        },
    }
};
</script>