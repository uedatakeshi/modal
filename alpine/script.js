function app() {
  return {
    showModal: false,
    showModalSub: false,
    result: "",
    companyId: "",
    name: "",
    tel: "",
    searchResults: "",
    searchSubResults: "",

    // 検索結果を待って画面表示させるため、async awaitを使っている。
    async search() {
      try {
        const response = await fetch(`result.php?name=${this.name}`);
        this.searchResults = await response.text();
      } catch (error) {
        console.error("Error fetching the content:", error);
      }
    },

    selectRow(id) {
      this.companyId = id;
      this.showModalSub = true;
    },

    async searchSub() {
      try {
        const response = await fetch(
          `result_sub.php?tel=${this.tel}&company_id=${this.companyId}`
        );
        this.searchSubResults = await response.text();
      } catch (error) {
        console.error("Error fetching the content:", error);
      }
    },

    selectSubRow(id) {
      this.showModalSub = false;
      this.showModal = false;
      this.result = id;
      this.searchResults = "";
      this.searchSubResults = "";
      this.name = "";
      this.tel = "";
    },
  };
}
