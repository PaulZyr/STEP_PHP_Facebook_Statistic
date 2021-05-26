<body>
    <div class="container">
        <div class="border border-primary border-2 p-4 bg-light">
            <div class="border border-secondary border-2 bg-primary text-white p-3">
                <h4>Оберіть файл:</h4>
                <p>(максимальний розмір файла - <?= FILE_JSON_MAX_SIZE / 1048576 ?> Мб)</p>

                <form action="index.php?action=upload" 
                        method="post"
                        enctype="multipart/form-data">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="hidden" 
                                name="MAX_FILE_SIZE" 
                                value=<?=FILE_JSON_MAX_SIZE?>>
                            <input type="file" 
                                class="custom-file-input" 
                                id="inputGroupFile" 
                                name="json_file"
                                accept="*.json">
                            <label class="custom-file-label" for="inputGroupFile" id="fileName">*.json</label>
                        </div>

                        <div class="input-group-append">
                            <button class="btn btn-outline-light" type="submit" name="btn">Завантажити</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
