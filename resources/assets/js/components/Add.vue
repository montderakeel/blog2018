<template>
    <div>
        <div class="modal" :class="openModel" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" @click="close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" class="form-control" v-model="post.title">
                    </div>
                    <div class="form-group">
                        <label>Post Content</label>
                        <input type="text" class="form-control" v-model="post.body">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" @click="close">Close</button>
                    <button type="button" v-on:click="SavePost" class="btn btn-primary">Save changes</button>
                </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</template>

<script>
export default {
  props: ['openModel'],
  data() {
      return {
          post: {title: '', body: ''}
      }
  },
  methods: {
      close() {
          this.$emit('closeReq')
      },

      SavePost() {
        axios.post(`api/posts`, {
            title: this.post.title,
            body: this.post.title
        })
        .then(response => {
            console.log(response.data)
        })
      }
  }
}
</script>
