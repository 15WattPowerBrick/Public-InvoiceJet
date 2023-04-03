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
    <div class="grid grid-cols-1 gap-4 text-center">
        <span class="text-4xl font-semibold ">InvoiceJet</span>
        <p class="max-w-lg text-3xl font-bold leading-normal">Create Invoices with ease</p>
        <p class="text-lg font-medium pb-10">Create and export invoices with our user-friendly form and have peace of mind with your accounts.</p>

        <form id="tocreate" method="post" action="create-invoice-form.php" class="flex items-center justify-center">
            <button type="submit" form="tocreate" class="flex text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 rounded-lg text-3xl px-10 py-2.5 text-center mr-2 mb-2">
                Start Creating Invoices
            </button>
        </form>
    </div>
</div>


