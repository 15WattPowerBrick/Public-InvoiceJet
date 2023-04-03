<?php

include("header.php");

?>

<style>
    html, body {
        background: rgba(17, 24, 39, 1);
        /*background: repeating-linear-gradient(0deg, rgba(24,28,36,1) 0%, rgba(9,9,121,1) 50%, rgb(24,28,36) 100%) no-repeat;*/
        margin: 0;
        height: 90%;
    }
</style>

<div class="text-white px-10 h-full flex items-center justify-center">
    <div class="grid grid-cols-1 gap-4 text-left">

        <h1 style="font-size: 9vw;
                    font-weight: bold;
                    background: -webkit-linear-gradient(180deg, yellow, blue);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;" 
                    class="font-extrabold">
        InvoiceJet,
        </h1>
        <p class="max-w-lg text-3xl font-bold leading-normal">Create Invoices with ease</p>
        <p class="text-lg font-medium pb-5">Create and export invoices with our user-friendly form and have peace of mind with your accounts.</p>

        <form id="tocreate" method="post" action="create-invoice-form.php" class="">
            <button type="submit" form="tocreate" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 rounded-lg text-xl px-5 py-2.5 text-center mr-2 mb-3">
                Start Creating Invoices
            </button>

            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-xl px-5 py-2.5 text-center mr-2 mb-3">
                Log In
            </button>

            <button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg text-xl px-5 py-2.5 mr-2 mb-3">   
                Sign Up
            </button>
        </form>

        

    </div>
</div>


