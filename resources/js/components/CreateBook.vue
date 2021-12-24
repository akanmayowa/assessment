<template>
    <div>
        <h3 class="text-center">Create Book</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addBook">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="book.name">
                    </div>
                    <div class="form-group">
                        <label>isbn</label>
                        <input type="text" class="form-control" v-model="book.detail">
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
                    <button type="submit" class="btn btn-primary">Create</button>
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
        methods: {
            addBook() {
                this.axios
                    .post('http://localhost:8000/api/v1/books', this.book)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>