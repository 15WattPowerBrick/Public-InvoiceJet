<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Invoice</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="output.css">

    <style>
        body {
            font-family: "Inter", sans-serif;
            background: rgba(242, 243, 245, 1);
        }

        #items {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #items td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #items tr:nth-child(even){background-color: #f2f2f2;}

        #items tr:hover {background-color: #ddd;}

        #items th {
            padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>

<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">InvoiceJet</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="lg:flex lg:space-y-0 p-8 space-x-10 justify-center space-y-10">
        <form id="myform" method="post" action="generate-pdf.php">
            <page class="block bg-white shadow-lg shadow-cyan-500/50">
                <div class="p-8 ">
                    <input class="text-xl w-1/2" type="text" name="companyName" id="companyName" placeholder="Company Name"><br>
                    <input type="text" name="addressLineOne" id="addressLineOne" placeholder="Address Line 1"><br>
                    <input type="text" name="addressLineTwo" id="addressLineTwo" placeholder="Address Line 2"><br>
                    <input type="text" name="yourName" id="yourName" placeholder="Your name"><br>
                    <input type="text" name="phone" id="phone" placeholder="Phone Number"><br>
                    <input type="text" name="email" id="email" placeholder="Email"><br>
                
                    <br><p class="text-xl">Bill To:</p>
                    <div> 
                        <div class="inline-block pr-8">
                            <input type="text" name="clientName" id="clientName" placeholder="Client Name"><br>
                            <input type="text" name="clientAddressLineOne" id="clientAddressLineOne" placeholder="Client Address Line 1"><br>
                            <input type="text" name="clientAddressLineTwo" id="clientAddressLineTwo" placeholder="Client Address Line 2"><br>
                        </div>
                        <div class="inline-block">
                            <div class="inline-block pr-4">
                                <p>Invoice No.</p>
                                <p>Invoice Date</p>
                                <p>Due Date</p>
                            </div>
                    
                            <div class="inline-block">
                                <input class="w-[150px]" type="text" name="invoiceNo" id="invoiceNo" placeholder="Invoice No."><br>
                                <input type="date" name="invoiceDate" id="invoiceDate"><br>
                                <input type="date" name="dueDate" id="dueDate"><br>
                            </div>
                        </div>
                        
                    </div><br>

                    <div class="h-48">
                        <table id="items">
                            <tr>
                                <th>Description</th>
                                <th>Qty</th>
                                <th>Unit Price</th>
                                <th>Amount</th>
                            </tr>
                        </table>
                        <div class="relative p-8">
                            <button type="button" class="absolute bottom-0 right-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                                Add Items
                            </button>
                        </div>
                    </div>
                    
                    <br><p class="text-l">Comments</p>
                    <textarea name="comments" id="comments" rows="4" class="block w-full text-sm" placeholder="Write your Comments here..."></textarea>
                    <br><p class="text-l">Terms & Conditions</p>
                    <textarea name="terms" id="terms" rows="4" class="block w-full text-sm" placeholder="Write your Terms & Conditions here..."></textarea>
                </div>
            </page>
        </form>
        <div class="">
            <h1 class="text-3xl font-bold pb-8">INV-123</h1>
            <p class="pb-3 text-xl">Save Options</p>
            <button type="submit" form="myform" class="flex text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75v6.75m0 0l-3-3m3 3l3-3m-8.25 6a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"></path>
                </svg> 
                Save
            </button>

            <button type="button" class="flex text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"></path></svg>    
                Save & Download
            </button>

            <button type="button" class="flex text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z"></path>
                </svg>    
                Save & Print
            </button>

            <p class="pt-8 pb-3 text-xl">Recent Items</p>

            <form>
                <div class="space-y-3">
                    <div class="max-w-[200px] flex p-3 bg-white border border-gray-200 rounded-lg shadow">
                        <input type="checkbox">
                        <div class="pl-3">
                            <p class="text-l font-bold tracking-tight text-gray-900">Placeholder Item</p>
                            <p class=" font-normal text-gray-700">Unit Price: $200</p>
                        </div>
                    </div>

                    <div class="max-w-[200px] flex p-3 bg-white border border-gray-200 rounded-lg shadow">
                        <input type="checkbox">
                        <div class="pl-3">
                            <p class="text-l font-bold tracking-tight text-gray-900">Placeholder Item</p>
                            <p class=" font-normal text-gray-700">Unit Price: $200</p>
                        </div>
                    </div>

                    <div class="max-w-[200px] flex p-3 bg-white border border-gray-200 rounded-lg shadow">
                        <input type="checkbox">
                        <div class="pl-3">
                            <p class="text-l font-bold tracking-tight text-gray-900">Placeholder Item</p>
                            <p class=" font-normal text-gray-700">Unit Price: $200</p>
                        </div>
                    </div>

                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                        Add Selected Items
                    </button>
                </div>
            </form>


            <p class="pt-8 pb-3 text-xl">Cancel Invoice</p>
            <button type="button" class="flex text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300     font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                </svg>
                Cancel & Delete
            </button>


        </div>
    </div>

   
</body>
</html>