<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.laravel = { csrfToken: '{{ csrf_token() }}' }</script>

        <title>Notes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <!-- Styles -->
        
    </head>
    <body>
        <div id="app">
            <nav>
                <div class="navigation-div">

                    <div class="note-brand">
                        <img class="logo-img" src="{{ asset('images/logo.png') }}">
                        <p>Notes</p>
                    </div>

                    <div>
                        <button>
                            <i class="las la-bars"></i>
                        </button>
                    </div>

                </div>
                <ul class="navigation-list">
                    <li>Create</li>
                    <li>Folders</li>
                    <li>Logout</li>
                </ul>
            </nav>

            <main>

                <!-- <form class="search-form">
                    <div>
                        <input placeholder="Search"/>
                    </div>
                </form>

                <ul class="note-list">
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <button class="edit-btn"><i class="las la-edit"></i></button>
                        <button class="delete-btn"><i class="las la-trash"></i></button>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                    <li>
                        <h3>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ad. Laboriosam officia mollitia nihil beatae officiis vero corporis eligendi, reprehenderit saepe inventore! Dolorem dolor praesentium nulla eaque magni quis veritatis.</p>
                        <hr>
                    </li>
                </ul> -->
                <!-- <form class="compose-form">
                    <div class="compose-form-div">
                        <div class="input-div">
                            <label for="note-title">Title</label>
                            <input id="note-title"/>
                        </div>
                        <div class="input-div">
                            <label for="note-body">Body</label>
                            <textarea id="note-body"></textarea>
                        </div>
                        <div class="compose-form-btn-div">
                            <button>Add Note</button>
                        </div>
                    </div>
                </form> -->

                <!-- <h2>The mantle of Deborah as read in the book of Judges 16, where deborah delivered the people of isreal from the philistines</h2>
                <p class="note-view-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem rerum labore eveniet voluptate, repellendus vero at qui ab sint doloribus aliquam voluptatum harum ad facilis fugit exercitationem eligendi consequatur iusto.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam assumenda doloremque harum, officia nam animi ut non labore commodi hic doloribus ullam minima fugiat totam eveniet tempore cum deleniti. Similique?
                </p> -->

                <div class="folder-flex-container">
                    <div class="folder-div">
                        <img src="{{ asset('images/folder-icon.png') }}">
                        <p>Thoughts</p>
                    </div>
                    <div class="folder-div">
                        <img src="{{ asset('images/folder-icon.png') }}">
                        <p>Thoughts</p>
                    </div>
                    <div class="folder-div">
                        <img src="{{ asset('images/folder-icon.png') }}">
                        <p>Thoughts</p>
                    </div>
                    <div class="folder-div">
                        <img src="{{ asset('images/folder-icon.png') }}">
                        <p>Thoughts</p>
                    </div>
                    <div class="folder-div">
                        <img src="{{ asset('images/folder-icon.png') }}">
                        <p>Thoughts</p>
                    </div>
                    <div class="folder-div">
                        <img src="{{ asset('images/folder-icon.png') }}">
                        <p>Thoughts</p>
                    </div>
                    <div class="folder-div">
                        <img src="{{ asset('images/folder-icon.png') }}">
                        <p>Thoughts</p>
                    </div>
                    <div class="folder-div">
                        <img src="{{ asset('images/folder-icon.png') }}">
                        <p>Thoughts</p>
                    </div>
                    <div class="folder-div">
                        <img src="{{ asset('images/folder-icon.png') }}">
                        <p>Thoughts</p>
                    </div>
                    <div class="folder-div">
                        <img src="{{ asset('images/folder-icon.png') }}">
                        <p>Thoughts</p>
                    </div>
                    <div class="folder-div">
                        <img src="{{ asset('images/folder-icon.png') }}">
                        <p>Thoughts</p>
                    </div>       
                </div>
            </main>

        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
