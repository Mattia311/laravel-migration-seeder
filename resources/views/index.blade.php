@forelse($travels as $travel)

<div class="col">
    <div class="card travel">
        <div class="card-body text-black-50">
            <h3>{{$travel->destinazione}}</h3>
        </div>

    </div>
</div>
@empty

<p>Nothing to see here sorry</p>

@endforelse