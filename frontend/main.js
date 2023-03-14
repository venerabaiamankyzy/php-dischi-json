const app = Vue.createApp({
  data() {
    return {
      apiUrl:
        "http://localhost:8888/lesson_68/php-dischi-json/API/get-list.php",
      diskList: [],
    };
  },
  methods: {
    getData(url) {
      axios.get(url).then((response) => {
        console.log(response);
        this.diskList = response.data;
      });
    },
  },
  created() {
    this.getData(this.apiUrl);
  },
});
app.mount("#app");
