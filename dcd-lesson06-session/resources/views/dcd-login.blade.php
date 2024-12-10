<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHN-Login</title>
</head>
<body>
    <section class='container my-3'>
        <form action="">
            <div class="card-header">
                <h1> DCD - login</h1>
            </div>

            <div class="card-body">
                <div class="mb-3">
                    <label for="dcdemail" class=""form-label>Email</label>
                    <input type="email" class="form-controller"
                    id="dcdemail" name="dcdemail"
                    planceholder="dcdEmail@example.com"/>
                    
                </div>
                <div class="mb-3">
                    <label for="dcdpass" class=""form-label>Password</label>
                    <input type="password" class="form-controller"
                    id="dcdpass" name="dcdpass"
                    planceholder="xxxx"/>
                    <span id="pass-error"></span>
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-primary">submit</button>
                @if (Session ::has('dcd-error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ session ::get('dcd-error')}}</li>
                        </ul>
                    </div>
                @endif
            </div>
        </form>
    </section>
</body>
</html>