@extends('layouts.admin')

@section('title')
    SpacePort | Add Ship
@endsection

@section('panel')
        <div id="edit-panel">
            <h3 style="text-transform: lowercase">Insert Form</h3>

            <form action="{{ asset('/ships/insert') }}" method="post" enctype="multipart/form-data">

                <table id="edit-table">
                    <tr>
                        <td>
                            <label for="name">Add Name: </label>
                        </td>
                        <td>
                            <input type="text" name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="price">Add Price: </label>
                        </td>
                        <td>
                            <input type="number" name="price">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="story">Add Story:</label>
                        </td>
                        <td>
                            <textarea id="story" name="story"  cols="20" rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pic">Add Picture: </label>
                        </td>
                        <td>
                            <input type="file" accept="image/*" name="img" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pic">Add Category: </label>
                        </td>
                        <td>
                            <select name="cat" id="ddCats">
                                <option value="0">Choose</option>
                                @foreach($cats as $cat)
                                    <option value="{{ $cat->id_cat }}">{{ $cat->ime }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="reset" name="reset">Reset</button>
                            <button type="submit" name="submit">Add</button>
                        </td>
                    </tr>
                </table>

                @csrf

            </form>
        </div>

        @if(session()->has('error'))
            <div id="errors">
                <ul>
                    @foreach(session('error') as $tag)
                        <li style="color: red">{{ $tag }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

@endsection
