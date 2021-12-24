<template>
    <div>
        <h3 class="text-center">Edit Books</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateBook">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="book.name">
                    </div>

                    <div class="form-group">
                        <label>isbn</label>
                        <input type="text" class="form-control" v-model="book.isbn">
                    </div>

                    <div class="form-group">
                        <label>authors</label>
                        <input type="text" class="form-control" v-model="book.authors">
                    </div>

                    <div class="form-group">
                        <label>country</label>
                        <input type="text" class="form-control" v-model="book.country">
                    </div>

                    <div class="form-group">
                        <label>number_of_pages</label>
                        <input type="number" class="form-control" v-model="book.number_of_pages">
                    </div>

                    <div class="form-group">
                        <label>publisher</label>
                        <input type="text" class="form-control" v-model="book.publisher">
                    </div>

                    <div class="form-group">
                        <label>release_date</label>
                        <input type="text" class="form-control" v-model="book.release_date">
                    </div>
              
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                book: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/v1/books/${this.$route.params.id}`)
                .then((res) => {
                    this.book = res.data;
                });
        },
        methods: {
            updateBook() {
                this.axios
                    .patch(`http://localhost:8000/api/v1/books/${this.$route.params.id}`, this.book)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>