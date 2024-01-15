<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .sidenav {
            height: 100%;
            width: 230px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #fff;
            overflow-x: hidden;
            padding-top: 20px;
            overflow-y: auto;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #DCDCDC;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #B9B9B9;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 160px;
            padding: 0px 10px;
        }


        #toppic {
            font-size: 11pt;
            color: #ADB5BD;
        }

        .menu {
            height: 44px;
            display: flex;
            align-items: center;
        }

        .menu:hover {
            color: #007BFF;
        }

        .submenu {
            display: none;
            font-size: 11pt;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 20px;
        }

        .submenu-item {
            cursor: pointer;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-left: 14px;
            height: 35px;
            display: flex;
            align-items: center;
            padding-right: 10px;
        }

        .submenu-item:hover {
            color: #2790FF;
        }


        .submenu.active {
            display: block;
            max-width: none;
        }

        .subicon {
            font-size: 5pt;
        }

        .submenu-icon {
            font-size: 8pt;
        }
    </style>
</head>

<body>
    <div class="sidenav" style="padding: 30px;">
        <label id="toppic" class="mt-5 mb-2">Home</label>
        <div>
            <label class="menu">
                <i class="bi bi-hr ms-2 me-2"></i>Dashboard</i>
            </label>
        </div>
        <hr>
        <label id="toppic" class="mb-2">Management System</label>
        <div>
            <label class="menu pointer" onclick="toggleSubMenu(this)">
                <i class="bi bi-building ms-2 me-2"></i>Context<i class="bi bi-chevron-right ms-2 submenu-icon"></i>
            </label>
            <div class="submenu">
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>Context Analysis</label>
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>Interested Party</label>
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>ISMS Scope</label>
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>ISMS Process</label>
            </div>
        </div>
        <div>
            <label class="menu pointer" onclick="toggleSubMenu(this)">
                <i class="bi bi-people ms-2 me-2"></i>Leadership<i class="bi bi-chevron-right ms-2 submenu-icon"></i>
            </label>
            <div class="submenu">
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>Leadership & Commitment</label>
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>IS Policy</label>
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>ISMS Roles & Responsibilities</label>
            </div>
        </div>
        <div>
            <label class="menu pointer" onclick="toggleSubMenu(this)">
                <i class="bi bi-newspaper ms-2 me-2"></i>Planning<i class="bi bi-chevron-right ms-2 submenu-icon"></i>
            </label>
            <div class="submenu">
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>item1</label>
            </div>
        </div>
        <div>
            <label class="menu pointer" onclick="toggleSubMenu(this)">
                <i class="bi bi-tornado ms-2 me-2"></i>Support<i class="bi bi-chevron-right ms-2 submenu-icon"></i>
            </label>
            <div class="submenu">
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>item1</label>
            </div>
        </div>
        <div>
            <label class="menu pointer" onclick="toggleSubMenu(this)">
                <i class="bi bi-record-circle-fill ms-2 me-2"></i>Operation<i class="bi bi-chevron-right ms-2 submenu-icon"></i>
            </label>
            <div class="submenu">
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>item1</label>
            </div>
        </div>
        <div>
            <label class="menu pointer" onclick="toggleSubMenu(this)">
                <i class="bi bi-graph-up ms-2 me-2"></i>Performance<i class="bi bi-chevron-right ms-2 submenu-icon"></i>
            </label>
            <div class="submenu">
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>item1</label>
            </div>
        </div>
        <div>
            <label class="menu pointer" onclick="toggleSubMenu(this)">
                <i class="bi bi-image-alt ms-2 me-2"></i>Improvement<i class="bi bi-chevron-right ms-2 submenu-icon"></i>
            </label>
            <div class="submenu">
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>item1</label>
            </div>
        </div>
        <hr>
        <label id="toppic" class="mb-2">Initial System</label>
        <div>
            <label class="menu pointer" onclick="toggleSubMenu(this)">
                <i class="bi bi-image-alt ms-2 me-2"></i>Database<i class="bi bi-chevron-right ms-2 submenu-icon"></i>
            </label>
            <div class="submenu">
                <label class="submenu-item"><i class="bi bi-circle ms-2 me-2 subicon"></i>item1</label>
            </div>
        </div>
    </div>

    <script>
        function toggleSubMenu(menuItem) {
            var submenu = menuItem.nextElementSibling;
            submenu.classList.toggle('active');

            var icon = menuItem.querySelector('.submenu-icon');
            icon.classList.toggle('bi-chevron-right');
            icon.classList.toggle('bi-chevron-down');

            var submenuItems = submenu.querySelectorAll('.submenu-item');
            submenuItems.forEach(item => {
                item.addEventListener('click', function() {
                    if (item.textContent.includes('Context Analysis')) {
                        window.location.href = '/';
                    } else if (item.textContent.includes('Interested Party')) {
                        window.location.href = '/interestedParty';
                    } else if (item.textContent.includes('ISMS Scope')) {
                        window.location.href = '/ISMSScope';
                    } else if (item.textContent.includes('ISMS Process')) {
                        window.location.href = '/ISMSProcess';
                    } else if (item.textContent.includes('Leadership & Commitment')) {
                        window.location.href = '/LeadershipandCommitment';
                    }
                });
            });
        }
    </script>
</body>

</html>