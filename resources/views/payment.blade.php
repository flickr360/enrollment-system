<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment</title>
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}" />
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <div class="logo">
          <img src="{{ asset('images/logo.png') }}" alt="Logo" />
        </div>
        <ul class="menu">
          <li class="menu-item">
            <a href="{{ route('dashboard') }}"><span>Dashboard</span></a>
          </li>
          <li class="menu-item">
            <a href="{{ route('profile') }}"><span>Profiles</span></a>
          </li>
          <li class="menu-item">
              <a href="{{ route('schedule') }}"><span>Schedule</span></a>
          </li>
          <li class="menu-item">
            <a href="{{ route('payment') }}"><span>Payment</span></a>
          </li>
        </ul>

        <div class="logout">
            <form method="POST" action="{{ route('logout') }}">
               @csrf
            <button type="submit">Log Out</button>
            </form>
        </div>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <div class="balance-section">
          <h1>Balance : {{ $balance }} PHP</h1>
        </div>

        <div class="transaction-section">
          <h3>Recent Transactions</h3>

          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Date/Time</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transactions as $transaction)
                <tr>
                  <td>{{ $transaction->name }}</td>
                  <td>{{ $transaction->created_at }}</td>
                  <td>{{ $transaction->type }}</td>
                  <td>{{ number_format($transaction->amount, 2) }} PHP</td>
                  <td class="status">{{ $transaction->status }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
