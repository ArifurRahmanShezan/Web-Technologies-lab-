<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arifur Rahman</title>
</head>
<body>
    <form action="">
        <fieldset>
        <h1>Add Product</h1>
        <fieldset>
            <legend>Product Information & Details</legend>
            <table>
                <tr>
                    <td>Product Name:</td>
                    <td><input type="text"placeholder="Product Name"></td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td><select name="Select Category" >
                        <option value="">Select Category</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Groceries">Groceries</option>
                        <option value="Food">Food</option>
                        <option value="Cars">Cars</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Price(USD):</td>
                    <td><input type="number" placeholder="0.00"></td>
                </tr>
                <tr>
                    <td>SKU(Stock Keeping Unit):</td>
                    <td><input type="number"placeholder="Unique SKU"></td>
                </tr>
                <tr>
                    <td>Stock Quantity:</td>
                    <td><input type="number"placeholder="0"></td>
                </tr>
                <tr>
                    <td>Product Image:</td>
                    <td><input type="file"></td>
                </tr>
                <tr>
                    <td>Available Colors:</td>
                    <td><select name="available colors" multiple size="3">
                        <option value="Red">Red</option>
                        <option value="Green">Green</option>
                        <option value="Blue">Blue</option>
                        <option value="Yellow">Yellow</option>
                        <option value="Black">Black</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                        <textarea name="description"rows="5"cols="20"placeholder="Detailed description of the product"></textarea>

                    </td>
                </tr>
                <tr>
                    <td>Brand</td>
                    <td><input type="text"placeholder="Brand Name"></td>
                </tr>
                <tr>
                    <td>Weight(KG)</td>
                    <td><input type="number"placeholder="0.00"></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Additional Information & Settings</legend>
            <table>
                <tr>
                    <td>Available Online:</td>
                    <td><label>
                            <input type="radio" name="Yes">Yes
                        </label>
                        <label>
                            <input type="radio" name="No"> No
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Discount Available:</td>
                    <td>
                        <label >
                            <input type="checkbox" name="Yes"> Yes
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Launch Date:</td>
                    <td><input type="date"></td>
                </tr>
                <tr>
                    <td>Customer Rating:</td>
                    <td><input type="range"></td>
                </tr>
                <tr>
                    <td>Tags</td>
                    <td><input type="text"placeholder="e.g.,trending,bestseller"></td>
                </tr>
            </table>
        </fieldset>
        <table>
                <tr>
                    <td><input type="submit" value="Create Product"></td>
                    <td><input type="reset" value="Clear Form"></td>
                </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>