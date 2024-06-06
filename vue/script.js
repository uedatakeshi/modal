const { createApp, ref } = Vue;
createApp({
  setup() {
    const showModal = ref(false);
    const showModalSub = ref(false);
    const searchResults = ref("");
    const searchSubResults = ref("");
    const result = ref("");
    const name = ref("");
    const company_id = ref("");
    const tel = ref("");

    const openModal = () => {
      showModal.value = true;
    };

    const closeModal = () => {
      showModal.value = false;
    };

    const closeModalSub = () => {
      showModalSub.value = false;
    };

    const search = async () => {
      try {
        const response = await fetch("result.php");
        const data = await response.text();
        searchResults.value = data;
      } catch (error) {
        console.error("Error fetching the content:", error);
      }
    };

    const selectRow = (id) => {
      console.log("ee");
      company_id.value = id;
      showModalSub.value = true;
    };

    const searchSub = async () => {
      try {
        const response = await fetch("result_sub.php");
        const data = await response.text();
        searchSubResults.value = data;
      } catch (error) {
        console.error("Error fetching the content:", error);
      }
    };

    const selectSubRow = (id) => {
      showModalSub.value = false;
      showModal.value = false;
      result.value = id;
    };

    return {
      showModal,
      showModalSub,
      searchResults,
      searchSubResults,
      result,
      name,
      company_id,
      tel,
      openModal,
      closeModal,
      closeModalSub,
      search,
      selectRow,
      searchSub,
      selectSubRow,
    };
  },
}).mount("#app");
