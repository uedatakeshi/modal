const { createApp, ref } = Vue;
createApp({
  setup() {
    const modalVisible = ref(false);
    const modalSubVisible = ref(false);
    const result = ref("");
    const name = ref("");
    const company_id = ref("");
    const tel = ref("");

    const openModal = () => {
      modalVisible.value = true;
    };

    const closeModal = () => {
      modalVisible.value = false;
    };

    const closeModalSub = () => {
      modalSubVisible.value = false;
    };

    const search = async () => {
      try {
        const response = await fetch("result.php");
        const data = await response.text();
        result.value = data;
      } catch (error) {
        console.error("Error fetching the content:", error);
      }
    };

    const selectRow = (id) => {
      company_id.value = id;
      modalSubVisible.value = true;
    };

    const searchSub = async () => {
      try {
        const response = await fetch("result_sub.php");
        const data = await response.text();
        result.value = data;
      } catch (error) {
        console.error("Error fetching the content:", error);
      }
    };

    const selectSubRow = (id) => {
      modalSubVisible.value = false;
      modalVisible.value = false;
      result.value = id;
    };

    return {
      modalVisible,
      modalSubVisible,
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
