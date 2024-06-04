<table>
    <tbody>
        <tr>
            <th>ID</th>
            <th>社名</th>
            <th>日付</th>
        </tr>
        <tr @click="selectRow(1)">
            <td>1</td>
            <td><?php echo $_GET['name']; ?></td>
            <td>2024-05-30</td>
        </tr>
        <tr @click="selectRow(2)">
            <td>2</td>
            <td>ソニー</td>
            <td>2024-05-31</td>
        </tr>
        <tr @click="selectRow(3)">
            <td>3</td>
            <td>松下電器</td>
            <td>2024-05-31</td>
        </tr>
    </tbody>
</table>