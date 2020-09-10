<template>
  <button class="btn btn-danger" ref="deleteNote" @click="destroyNote">Delete</button>
</template>

<script>
export default {
  props: ["endpoint"],
  methods: {
    async destroyNote() {
      let q = window.confirm("are you sure?");
      if (q == true) {
        let response = await axios.delete(`/api/notes/${this.endpoint}/delete`);
        if (response.status == 200) {
          this.$toasted.show(response.data.message, {
            type: "success",
            duration: "1500",
          });

          this.$refs.deleteNote.parentNode.parentNode.remove();
        }
      }
    },
  },
};
</script>
