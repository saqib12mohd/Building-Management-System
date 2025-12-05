<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Lease Contract Invoice</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @media print {
            body {
                margin: 0;
            }
            .page {
                width: 210mm;
                min-height: 297mm;
                padding: 20mm;
            }

            .no-print {
                display: none !important;
            }
        }
    </style>
</head>

<body class="bg-gray-200 text-sm">

<div class="page bg-white shadow mx-auto rounded-lg">

    <!-- Header -->
    <header class="flex justify-between border-b pb-4 mb-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-700">LEASE CONTRACT INVOICE</h1>
            <p class="text-gray-500">A4 Print Format</p>
        </div>

        <div class="text-right">
            <p class="text-lg font-semibold">Company Name</p>
            <p class="text-gray-600">Address line here</p>
            <p class="text-gray-600">Phone: 000000000</p>
        </div>
    </header>


    <!-- Contract Details -->
    <section>
        <h2 class="text-lg font-semibold border-l-4 pl-3 border-blue-500 mb-3">Lease Contract</h2>

        <div class="grid grid-cols-2 gap-3">
            <p><span class="font-semibold">Contract Date:</span> {{ $contract->contractdate }}</p>
            <p><span class="font-semibold">Name:</span> {{ $contract->name }}</p>
            <p><span class="font-semibold">Unit:</span> {{ $contract->unit->name }} - {{ $contract->unit->building->name ?? "N/A" }}</p>
            <p><span class="font-semibold">Reference:</span> {{ $contract->reference }}</p>
            <p><span class="font-semibold">Ledger:</span> {{ $contract->ledger->name }}</p>
            <p><span class="font-semibold">Agent:</span> {{ $contract->agent->name }}</p>
        </div>
    </section>


    <!-- Lease Info -->
    <section class="mt-6">
        <h2 class="text-lg font-semibold border-l-4 pl-3 border-green-500 mb-3">Lease Information</h2>

        <div class="grid grid-cols-2 gap-3">
            <p><span class="font-semibold">Lease Months:</span> {{ $contract->leasemonths }}</p>
            <p><span class="font-semibold">Free Months:</span> {{ $contract->freemonths }}</p>
            <p><span class="font-semibold">Start Date:</span> {{ $contract->startdate }}</p>
            <p><span class="font-semibold">Expiry Date:</span> {{ $contract->expdate }}</p>
            <p><span class="font-semibold">Rent/month:</span> {{ $contract->rentpermonthamt }}</p>
            <p><span class="font-semibold">Total Rent:</span> {{ $contract->totalrentamt }}</p>
            <p><span class="font-semibold">Deposit:</span> {{ $contract->depositamt }}</p>
            <p><span class="font-semibold">Payment Type:</span> {{ $contract->ptype }}</p>
            <p><span class="font-semibold">Bank Charge:</span> {{ $contract->bankcharge }}</p>
            <p><span class="font-semibold">Installments:</span> {{ $contract->installment }}</p>
            <p><span class="font-semibold">Sales Post:</span> {{ $contract->salespost ? "Yes" : "No" }}</p>
            <p><span class="font-semibold">Receipt Post:</span> {{ $contract->receiptpost ? "Yes" : "No" }}</p>
        </div>
    </section>


    <!-- Closing Information -->
    <section class="mt-6">
        <h2 class="text-lg font-semibold border-l-4 pl-3 border-red-500 mb-3">Contract Closing Information</h2>

        <div class="grid grid-cols-2 gap-3">
            <p><span class="font-semibold">End Date:</span> {{ $contract->enddate }}</p>
            <p><span class="font-semibold">Refund Rent:</span> {{ $contract->refundrentamt }}</p>
            <p><span class="font-semibold">Refund Deposit:</span> {{ $contract->refunddepositamt }}</p>
            <p><span class="font-semibold">Payment Date:</span> {{ $contract->paydate }}</p>
            <p><span class="font-semibold">Payment Mode:</span> {{ $contract->pmode }}</p>
            <p><span class="font-semibold">Collected By:</span> {{ $contract->pymtcollectedby }}</p>
            <p><span class="font-semibold">Doc No:</span> {{ $contract->Pymtdocnumber }}</p>
        </div>
    </section>


    <!-- Payment Details -->
    <section class="mt-6">
        <h2 class="text-lg font-semibold border-l-4 pl-3 border-purple-500 mb-3">Payment Details</h2>

        <table class="w-full text-left border border-gray-300 text-xs">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-2 py-1">Due Date</th>
                    <th class="border px-2 py-1">Reference</th>
                    <th class="border px-2 py-1">Payment Mode</th>
                    <th class="border px-2 py-1">Bank</th>
                    <th class="border px-2 py-1">Deposited On</th>
                    <th class="border px-2 py-1">Note</th>
                    <th class="border px-2 py-1">Amount</th>
                </tr>
            </thead>

            <tbody>
            @foreach($contract->payment as $row)
                <tr>
                    <td class="border px-2 py-1">{{ $row->date }}</td>
                    <td class="border px-2 py-1">{{ $row->referencenum }}</td>
                    <td class="border px-2 py-1">{{ $row->paymentmode }}</td>
                    <td class="border px-2 py-1">{{ $row->bankname }}</td>
                    <td class="border px-2 py-1">{{ $row->depositdate }}</td>
                    <td class="border px-2 py-1">{{ $row->note }}</td>
                    <td class="border px-2 py-1">{{ $row->amount }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>


    <!-- Footer -->
    <footer class="mt-10 text-center text-xs text-gray-500">
       *** This is system-generated invoice — No signature required ***
    </footer>

</div>


<!-- ✅ Floating Print button -->
<button onclick="window.print()"
    class="no-print fixed bottom-6 right-6 px-5 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-full shadow-lg transition">
    🖨️ Print Invoice
</button>


</body>
</html>
