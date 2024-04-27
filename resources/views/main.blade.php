<style>
    .container{
        text-align: center;
        margin: 12rem 0;
        font-size: 9rem;
    }
    button{
        font-size: 7rem;
        border-radius: 50px;
        padding: 5rem;
        margin: 10rem;
    }
    .all{
        margin: 10rem 0;
    }
</style>
<div class="container">
    main page
    <div class="all" >
        <div class="taki">
            <a href="{{ route('login') }}">
                <button> Admin </button>
            </a>
        </div>

        <div class="taki">
            <a href="{{ route('visitSearch') }}">
                <button> user </button>
            </a>
        </div>
    </div>

</div>
