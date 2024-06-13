<template>
    <div class="container mt-5">
        <h1 class="mb-4">Blog List</h1>
        <button class="btn btn-primary mb-3" @click="createBlog">Create Blog</button>
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
                        <button class="btn btn-sm btn-secondary me-2" @click="editBlog(blog.id)">Edit</button>
                        <button class="btn btn-sm btn-danger" @click="deleteBlog(blog.id)">Delete</button>
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
        createBlog() {
            this.$router.push('/blogs/create');
        },
        async editBlog(id) {
            await
            this.$router.push('/blogs/edit/' + id);
        },
        deleteBlog(id) {
            axios.delete(`/api/blogs/${id}`)
                .then(response => {
                    this.fetchBlogs();
                });
        }
    }
};
</script>