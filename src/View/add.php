<h3>Thêm sản phẩm</h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post" class="">
            <div>
                <label for="exampleFormControlTextarea1">Id:</label>
                <input class="form-control" name="id" type="text" required placeholder="Nhập mã sản phẩm">
                <label for="exampleFormControlTextarea1">ProductName:</label>
                <input class="form-control" name="name" type="text" required placeholder="Nhập tên sản phẩm">
                <label for="exampleFormControlTextarea1">ProductLine:</label>
                <div >
                    <select name="line" class="custom-select custom-select-lg mb-3">
                        <option>Điện thoại</option>
                        <option>Điều hoà</option>
                        <option>Tủ Lạnh</option>
                    </select>
                </div>
                <label for="exampleFormControlTextarea1">Price:</label>
                <input class="form-control" name="price" type="text" required placeholder="Nhập giá sản phẩm">
                <label for="exampleFormControlTextarea1">Quantity:</label>
                <input class="form-control" name="quantity" type="number" required placeholder="Nhập số lượng tồn">
                <label for="exampleFormControlTextarea1">DateCreat:</label>
                <input class="form-control" name="date" type="text" required placeholder="yyyy-mm-dd">
                <label for="exampleFormControlTextarea1">Description:</label>
                <input class="form-control" name="desc" type="text" required placeholder="mô tả sản phẩm">
            </div>
            <div class="bt-4">
                <button type="submit" class="btn btn-primary">Add</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </div>
        </form>
    </div>

</div>