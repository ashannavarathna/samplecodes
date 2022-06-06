<%@ Page Language="VB" aspcompat=true  Debug="true" %>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>index</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <script language = "VB" type = "text/vbscript" runat="server">
        Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
             Dim fname = Request.Form("fname")
             Response.Write(fname)
                
                
        End Sub
    </script>

	<div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Student Registration</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents.</p>
            </div>
        </div>
        <form method="post" name="menu">
            <div class="col-lg-6 col-md-8 mx-auto">
                <div class="row">
                    <table class="table  table-bordered" id="data-table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Class</th>
                                <th>Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="fname"  aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="lname" aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="class" aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="contact" aria-label=".form-control-sm example">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="fname"  aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="lname" aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="class" aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="contact" aria-label=".form-control-sm example">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="fname"  aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="lname" aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="class" aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="contact" aria-label=".form-control-sm example">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="fname"  aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="lname" aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="class" aria-label=".form-control-sm example">
                                </td>
                                <td>
                                    <input class="form-control form-control-sm" type="text" name="contact" aria-label=".form-control-sm example">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 col-sm-3 text-center">
                    <input type="submit" name="save" class="btn btn-primary btn-sm" value="save"/>
                    <!--input type="submit" name="save" class="btn btn-secondary btn-sm"/-->
                </div>  
            </div>
        </form>
    </div>

</body>	
    <script type="text/javascript">
        let form = document.querySelector("form[name=menu]");
        let table = document.querySelector("#data-table");
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            if (e.submitter.name = "save") {
                let action = "test";
                let formData = new FormData();
                //loop table
                var rows = table.tBodies[0].rows;
                for (row of rows) {
                    //console.log(row);
                    let nodes = row.querySelectorAll("td input");
                    //console.log(nodes);
                    if (nodes[0].value != '' && nodes[1].value != '' && nodes[2].value != '' && nodes[3].value != '') {
                        formData.append('fname', nodes[0].value);
                        formData.append('lname', nodes[1].value);
                        formData.append('class', nodes[2].value);
                        formData.append('contact', nodes[3].value);
                    }

                }

                return new Promise(function (resolve, reject) {
                    // Serialize form data
                    // See https://htmldom.dev/serialize-form-data-into-a-query-string
                    const params = serialize(form);

                    // Create new Ajax request
                    const req = new XMLHttpRequest();
                    req.open('POST', `savedata.aspx?action=${action}`, true);
                    req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');

                    // Handle the events
                    req.onload = function () {
                        if (req.status >= 200 && req.status < 400) {
                            console.log(req, this.responseText);
                            resolve(req.responseText);
                        }
                    };
                    req.onerror = function () {
                        reject();
                    };

                    // Send it
                   console.log(params);
                   req.send(params);
                });;
            }
        });
        const serialize = function (formEle) {
            // Get all fields
            const fields = [].slice.call(formEle.elements, 0);

            return fields
                .map(function (ele) {
                    const name = ele.name;
                    const type = ele.type;

                    // We ignore
                    // - field that doesn't have a name
                    // - disabled field
                    // - `file` input
                    // - unselected checkbox/radio
                    if (!name || ele.disabled || type === 'file' || (/(checkbox|radio)/.test(type) && !ele.checked) || ele.value == '') {
                        return '';
                    }

                    // Multiple select
                    if (type === 'select-multiple') {
                        return ele.options
                            .map(function (opt) {
                                return opt.selected ? `${encodeURIComponent(name)}=${encodeURIComponent(opt.value)}` : '';
                            })
                            .filter(function (item) {
                                return item;
                            })
                            .join('&');
                    }

                    return `${encodeURIComponent(name)}=${encodeURIComponent(ele.value)}`;
                })
                .filter(function (item) {
                    return item;
                })
                .join('&');
        };

    </script>
</html>