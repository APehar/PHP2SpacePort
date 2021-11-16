@extends('layouts.admin')

@section('title')
    SpacePort | Edit Ship
@endsection

@section('panel')
    @isset($ship)
            <div id="edit-panel">
                        <h3 style="text-transform: lowercase">Edit Form</h3>

                <form action="{{ asset('/ships/edit/' . $ship->id_ship) }}" method="post" enctype="multipart/form-data">

                        <table id="edit-table">
                            <tr>
                                <td>
                                    <label for="name">New Name: </label>
                                </td>
                                <td>
                                    <input type="text" name="name" value="{{ $ship->name }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="price">New Price: </label>
                                </td>
                                <td>
                                    <input type="number" name="price" value="{{ $ship->price }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="story">New Story:</label>
                                </td>
                                <td>
                                    <textarea id="story" name="story"  cols="20" rows="5">{{ $ship->story }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="pic">New Picture: </label>
                                </td>
                                <td>
                                    <input type="file" accept="image/*" name="img" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="pic">Edit Category: </label>
                                </td>
                                <td>
                                    <select name="cat" id="ddCats">
                                        @foreach($cats as $cat)
                                            @if($cat->id_cat = $ship->cat_id)
                                                <option value="{{ $cat->id_cat }}" selected>{{ $cat->ime }}</option>
                                            @else
                                                <option value="{{ $cat->id_cat }}">{{ $cat->ime }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="hidden" name="orgImage" value="{{ $ship->img }}">
                                    <button type="reset" name="reset">Reset</button>
                                    <button type="submit" name="submit">Edit</button>
                                </td>
                            </tr>
                        </table>

                            @csrf

                </form>
            </div>
    @endisset
@endsection
