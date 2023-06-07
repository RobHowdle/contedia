@extends('app')
@section('content')
  <div class="text-wrapper">
    @auth
      <h1>Contedia</h1>
      <p>
        <span class="bold">At Contedia we really strive to provide an unparalleled level of expertise, quality of
          workmanship and customer service.</span>
        We provide our Digital Services to customers throughout the UK, and our IT Services are available to businesses
        across
        the North of England.

        Founded in 2001 by brothers Simon and Tim Guest, the company’s aim was to create lasting and truly beneficial
        relationships with small and medium sized businesses throughout the UK that were looking for accessible expertise
        from
        a business driven by high standards and focused skills, allowing customers to really benefit from a trusting,
        long-term relationship with Contedia.
      </p>
    @else
      <div class="text-wrapper">
        <h1>Warning! <i class="fa-solid fa-circle-exclamation"></i></h1>
        <p>You do not have an account :-( This is terrible news! You are missing the best news about Contedia! <a
            href="/register">Register Now!</a>
        </p>
      </div>
    @endauth
  </div>
@endsection
