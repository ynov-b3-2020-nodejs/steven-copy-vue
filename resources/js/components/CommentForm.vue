<template>
    <div>
        <div>
            <div v-for="comment in comments">
                {{ $comment.body }}
            </div>
            <form class="flex flex-lg-column" @submit.prevent="submitComment">
                <textarea class="border rounded p-3" v-model="comment"/>
                <button type="submit" class="border rounded py-2">Commenter</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['comments'],
        data() {
            return {
                comment: '',

            }
        },
        methods: {
            submitComment() {
                axios.post('/comments', {
                    content: this.comment
                });

                console.log(this.comment)
            }
        }
    }
</script>

