<?php include '../../../header.php';?>
    <style>
        #main {
            width: 100%;
            margin: auto;
        }
        
        header {
            width: 100%;
            height: 80px;
            margin: 0;
            background-color: rgb(2, 2, 2);
            color: white;
            float: left;
        }
        
        header h1 {
            text-align: center;
        }
        
        #footer {
            width: 100%;
            height: 30px;
            background-color: black;
            color: white;
            float: left;
            text-align: center;
        }
        
        .section {
            width: 29%;
            height: 890px;
            margin: 1.66%;
            float: left;
            padding: 10px;
            overflow: auto;
        }
        
        .left-section {
            background-color: blueviolet;
            margin-right: 0;
        }
        
        .middle-section {
            background-color: cadetblue;
            margin-right: 0;
        }
        
        .right-section {
            background-color: tomato;
        }
    </style>
    <section id="showcase" class="py-5 w-100">
        <div class="primary-overlay text-white">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <table class="table text-center table-striped table-hover">
                        <thead>
                            <tr class="bg-warning">
                                <th class="py-3"><a href="../../home.php">HOME</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-success">
                                <th>
                                    <a class="text-white" href="#">Assignment</a>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../assignment/4/cv.php">Day 4</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../assignment/5/index.php">Day 5</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../assignment/6/index.php">Day 6</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../assignment/7/index.php">Day 7</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../assignment/8/index.php">Day 8</a>
                                </td>
                            </tr>
                            <tr class="bg-success">
                                <th>
                                    <a class="text-white" href="#">Practice</a>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../practice/4/practice.php">Day 4</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="active" href="../../practice/5/practice1.php">Day 5</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../practice/6/gallery.php">Day 6</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../practice/7/griddemo.php">Day 7</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../practice/8/practice.php">Day 8</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-8 bg-light h-100" style="opacity: 0.7;">
                    <div id="content" class="text-dark">
                        <div id="main">
                            <header>
                                <h1>Company Name</h1>
                            </header>
                            <section class="section left-section">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</section>
                            <section class="section middle-section">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                                many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</section>
                            <section class="section right-section">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College
                                in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes
                                from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The
                                first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</section>
                            <footer id="footer">&copy 2020-21 by Jayesh Chauhan</footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../../../footer.php';?>