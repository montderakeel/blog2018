<template>
    <div>
        <button v-on:click="showAddPanel" class="btn btn-primary btn-sm">Add New Post</button>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Post Title</th>
                        <th>Post Content</th>
                        <th>Create At Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="post in posts" v-bind:key="post.id">
                        <td class="edit_width">{{ post.title }}</td>
                        <td>{{ post.body }}</td>
                        <td>{{ post.created_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <add :openModel='sendShowAddPanel' @closeReq="close"></add>
    </div>
</template>

<script>
    Vue.component('add', require('./Add.vue'));
    export default {
        data: function() {
            return {
                sendShowAddPanel: '',
                posts: []
            }
        },

        methods: {
            showAddPanel() {
                this.sendShowAddPanel = 'show';
            },
            close() {
                this.sendShowAddPanel = '';
            }
        },

        created () {
            axios.get(`api/posts`)
            .then(response => {
                this.posts = response.data
            })
        },

    }
</script>
<style>
    table{
        background-color: white;
    }
    .edit_width{
        width: 30%;
    }
</style>
