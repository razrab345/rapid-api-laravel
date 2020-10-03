<p>Админка</p>


<form class="comment-area" method="POST" action="/admin/panel" id="form">
                            {{csrf_field()}}
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                                <input type="email" class="form-control" name="email" placeholder="Your email address">
                                <input type="password" class="form-control" name="password" placeholder="Your password">
                                <input type="submit" name="submit" value="вход">
                            </form>