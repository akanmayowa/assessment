<template>
    <div>
        <h2 class="text-center">Books List</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>isbn</th>
                <th>authors</th>
                <th>number_of_pages</th>
                <th>publisher</th>
                <th>country</th>
                <th>release_date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="book in books" :key="book.id">
                <td>{{ book.id }}</td>
                <td>{{ book.name }}</td>
                <td>{{ book.isbn }}</td>
                <td>{{ book.authors }}</td>
                <td>{{ book.number_of_pages }}</td>
                <td>{{ book.publisher }}</td>
                <td>{{ book.country }}</td>
                <td>{{ book.release_date }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: book.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteBook(book.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                books: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/v1/books/')
                .then(response => {
                    this.books = response.data;
                });
        },
        methods: {
            deleteBook(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/v1/books/${id}`)
                    .then(response => {
                        let i = this.books.map(data => data.id).indexOf(id);
                        this.books.splice(i, 1)
                    });
            }
        }
    }
</script>