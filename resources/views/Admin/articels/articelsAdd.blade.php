<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <title>add</title>
    <link rel="stylesheet" href="./css/add.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
</head>

<body dir="rtl">
    <main>
        <h1>ثبت مقالات</h1>
        <form>
            <div id="name">
                <label for="productname">نام مقاله</label><br />
                <input type="text" id="product_name" name="product_name" required>
            </div>
            <div id="description">
                <label for="productdescription">توضیحات</label><br />
                <textarea id="product_description" name="product_description" required></textarea><br>
            </div>
            <div id="price">
                <label for="productname">نویسنده</label>
                <select id="educationLevel" name="education">
                    <option value="" disabled selected>نویسنده</option>
                    <option value="highschool"></option>
                    <option value="lisans"></option>
                    <option value="foghlisans"></option>
                    <option value="doctor"></option>
                </select>
            </div>
            <div id="image">
                <label for="productimage">تصویر</label><br />
                <input type="file" id="product_image" name="product_image" required>
            </div>
            <button type="submit" name="submit">ثبت مقاله</button>
        </form>
    </main>
</body>

</html>