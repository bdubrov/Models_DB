@extends('html_shop')
@section('shop_content')
    @if(isset($types))
        @if($shop_type == 0)
            @foreach($types as $type)
                <div class="catalog">
                    <h5><a href="/index/page=shop&lib=shop&shop_type={{$type->id}}">{{$type->name}}</a></h5>
                    <div class="list">
                        @foreach($type->products as $product)
                            <div class="list_item">
                                <div>
                                    <h6>{{$product->name}}</h6>
                                    <img src="{{asset("$product->photo")}}">
                                    <p>
                                        Особливості:
                                    </p>
                                    <ul>
                                        @foreach($product->options as $option)
                                        <li><a href="/index/page=shop&lib=shop&shop_option={{$option->id}}">{{$option->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="list_item_buy">
                                    <p>
                                        Ціна: {{$product->price}}
                                    </p>
                                    <button>Придбати</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @else
            <div class="catalog">
                <h5><a href="/index/page=shop&lib=shop&shop_type={{$types->find($shop_type)->id}}">{{$types->find($shop_type)->name}}</a></h5>
                <div class="list">
                    @foreach($types->find($shop_type)->products as $product)
                        <div class="list_item">
                            <div>
                                <h6>{{$product->name}}</h6>
                                <img src="{{asset("$product->photo")}}">
                                <p>
                                    Особливості:
                                </p>
                                <ul>
                                    @foreach($product->options as $option)
                                        <li><a href="/index/page=shop&lib=shop&shop_option={{$option->id}}">{{$option->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="list_item_buy">
                                <p>
                                    Ціна: {{$product->price}}
                                </p>
                                <button>Придбати</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    @elseif(isset($options))
        @if($shop_option == 0)
            @foreach($options as $option)
                <div class="catalog">
                    <h5><a href="/index/page=shop&lib=shop&shop_option={{$option->id}}">{{$option->name}}</a></h5>
                    <div class="list">
                        @foreach($option->products as $product)
                            @if($loop->index % 3 == 0)
                                </div>
                                <div class="list">
                            @endif
                        <div class="list_item">
                            <div>
                                <h6>{{$product->name}}</h6>
                                <img src="{{asset("$product->photo")}}">
                                <p>
                                    <a href="/index/page=shop&lib=shop&shop_option=0">Особливості:</a>
                                </p>
                                <ul>
                                    @foreach($product->options as $option)
                                        <li><a href="/index/page=shop&lib=shop&shop_option={{$option->id}}">{{$option->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="list_item_buy">
                                <p>
                                    Ціна: {{$product->price}}
                                </p>
                                <button>Придбати</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @else
            <div class="catalog">
                <h5><a href="/index/page=shop&lib=shop&shop_option={{$options->find($shop_option)->id}}">{{$options->find($shop_option)->name}}</a></h5>
                <div class="list">
                    @foreach($options->find($shop_option)->products as $product)
                        @if($loop->index % 3 == 0)
                            </div>
                            <div class="list">
                        @endif
                        <div class="list_item">
                            <div>
                                <h6>{{$product->name}}</h6>
                                <img src="{{asset("$product->photo")}}">
                                <p>
                                    <a href="/index/page=shop&lib=shop&shop_option=0">Особливості:</a>
                                </p>
                                <ul>
                                    @foreach($product->options as $option)
                                        <li><a href="/index/page=shop&lib=shop&shop_option={{$option->id}}">{{$option->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="list_item_buy">
                                <p>
                                    Ціна: {{$product->price}}
                                </p>
                                <button>Придбати</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    @endif
@endsection
