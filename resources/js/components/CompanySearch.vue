<template>
  <div>
    <form action class="form-inline">
      <div class="form-group mx-sm-3">
        <label for="search-box" class="sr-only">Search Box</label>
        <input
          v-model="query"
          @keydown.enter.stop.prevent="search"
          placeholder="Please enter keywords"
          autofocus
          type="text"
          id="search-box"
          class="form-control"
        >
      </div>
      <button type="button" @click="search" class="btn btn-success">search</button>
    </form>

    <!-- search results -->
    <div class="card-columns alert">
      <div v-for="(item,index) in companies" :key="index" class="card bg-light">
        <div class="card-header">{{ item.city }}</div>
        <div class="card-body">
          <h5 class="card-title" v-if="item.lighter" v-html="item.lighter"></h5>
          <h5 class="card-title" v-else>{{ item.name }}</h5>
          <p class="card-text">{{item.vision}}</p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "CompanySearch",
  data() {
    return {
      query: "",
      companies: []
    };
  },
  methods: {
    search() {
      this.axios
        .post("/search", { keywords: this.query })
        .then(response => {
          console.log(response.data.data);
          this.companies = response.data.data;
        })
        .catch(err => {
          console.log(err);
        });
    }
  }
};
</script>
