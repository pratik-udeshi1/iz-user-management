## User Management 

- Crud Operation (create,edit,delete) through Ajax Call through Jquery

- **Step1:** Create view page having table view (Initially table will be empty and by clicking new button modal popup open with input of above table headers and submit button)

- **Step2:** Once submit, form data send through jQuery ajax call, after inserted data table as to be updated with newly entered data

- **Step3:** In the table there is an edit button of each record, while click on edit button in same modal popup which is used for new open with related data and show update button. Once click on update button data will pass through ajax and update the table 

- **Step4:** In the table there is a delete button it will delete the record with confirmation popup Once task complete push the code to github and share the link

### Installation

```sh
$ cd /projectfolder
$ composer install
$ generate .env file
$ php artisan key:generate
$ php artisan migrate
$ php artisan serve
$ Visit http://127.0.0.1:8000/user
```

### License
**Open source, Hell Yeah!**