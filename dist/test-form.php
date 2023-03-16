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
    <div class="p-8 flex justify-center">
        <form method="post" action="generate-pdf.php">
            <page class="block w-2xl bg-white shadow-lg shadow-cyan-500/50">
                <div class="p-8 ">
                    <input class="text-xl w-1/2" type="text" name="companyName" id="companyName" placeholder="Company Name"><br>
                    <input type="text" name="addressLineOne" id="addressLineOne" placeholder="Address Line 1"><br>
                    <input type="text" name="addressLineTwo" id="addressLineTwo" placeholder="Address Line 2"><br>
                    <input type="text" name="yourName" id="yourName" placeholder="Your name"><br>
                    <input type="text" name="phone" id="phone" placeholder="Phone Number"><br>
                    <input type="text" name="email" id="email" placeholder="Email"><br>
                
                    <br><p class="text-xl">Bill To:</p>
                    <div> 
                        <div class="inline-block">
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
                                <input type="text" name="invoiceNo" id="invoiceNo" placeholder="Invoice No."><br>
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
                    
                    <br><p class="text-xl">Comments</p>
                    <textarea id="message" rows="4" class="block w-full text-sm" placeholder="Write your Comments here..."></textarea>
                    <br><p class="text-xl">Terms & Conditions</p>
                    <textarea id="message" rows="4" class="block w-full text-sm" placeholder="Write your Terms & Conditions here..."></textarea>
                </div>
            </page>
            <div>
                <button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    Download
                </button>
            </div>
        </form>
    </div>

   
</body>
</html>