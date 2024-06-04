<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>モーダルウィンドウの例</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
</head>

<body>
    <div id="app"></div>

    <script type="text/babel">
        class App extends React.Component {
            state = {
                showModal: false,
                showModalSub: false,
                result: "",
                companyId: "",
                name: "",
                tel: "",
            };

            openModal = () => {
                this.setState({ showModal: true });
            };

            closeModal = () => {
                this.setState({ showModal: false });
            };

            closeModalSub = () => {
                this.setState({ showModalSub: false });
            };

            search = async () => {
                try {
                    const response = await fetch(`result.php?name=${this.state.name}`);
                    const data = await response.text();
                    // ここで結果をどのように表示するかは、取得したデータの形式によります。
                } catch (error) {
                    console.error("Error fetching the content:", error);
                }
            };

            selectRow = (id) => {
                this.setState({ companyId: id, showModalSub: true });
            };

            searchSub = async () => {
                try {
                    const response = await fetch(`result_sub.php?tel=${this.state.tel}&company_id=${this.state.companyId}`);
                    const data = await response.text();
                    // ここで結果をどのように表示するかは、取得したデータの形式によります。
                } catch (error) {
                    console.error("Error fetching the content:", error);
                }
            };

            selectSubRow = (id) => {
                this.setState({ showModalSub: false, showModal: false, result: id });
            };

            render() {
                return (
                    <div>
                        <button onClick={this.openModal}>モーダルを開く1</button>
                        <p>選択結果：{this.state.result}</p>

                        {this.state.showModal && (
                            <div>
                                {/* モーダルのコンテンツ */}
                                <button onClick={this.closeModal}>閉じる</button>
                            </div>
                        )}

                        {this.state.showModalSub && (
                            <div>
                                {/* サブモーダルのコンテンツ */}
                                <button onClick={this.closeModalSub}>閉じる</button>
                            </div>
                        )}
                    </div>
                );
            }
        }

        ReactDOM.render(<App />, document.getElementById('app'));
    </script>
</body>

</html>