<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title . ' - UPA TIK POLIJE' : 'UPA TIK POLIJE'; ?></title>
    <link href="../tooplate-inner-peace.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Admin Dashboard Custom Styles */
        .admin-sidebar {
            width: 280px;
            background: linear-gradient(135deg, #2D5A87 0%, #4A7C8A 100%);
            position: fixed;
            left: 0;
            top: 60px;
            height: calc(100vh - 60px);
            overflow-y: auto;
            padding: 2rem 1.5rem;
            box-shadow: 2px 0 20px rgba(0, 0, 0, 0.1);
            z-index: 900;
        }

        .admin-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .admin-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .admin-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            transition: transform 0.3s ease;
        }

        .admin-logo:hover {
            transform: scale(1.05);
        }

        .admin-logo-text {
            font-size: 1.4rem;
            font-weight: bold;
            background: linear-gradient(135deg, #2D5A87 0%, #4A7C8A 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .admin-user-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .admin-user {
            text-align: right;
        }

        .admin-user-name {
            font-weight: 600;
            color: var(--dark);
            font-size: 0.95rem;
        }

        .admin-user-role {
            font-size: 0.8rem;
            color: #999;
        }

        .admin-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #4a90e2 0%, #F1E5AC 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .admin-sidebar h3 {
            color: white;
            font-size: 0.9rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            opacity: 0.7;
            letter-spacing: 1px;
        }

        .admin-sidebar h3:first-of-type {
            margin-top: 0;
        }

        .admin-menu {
            list-style: none;
            margin-bottom: 2rem;
        }

        .admin-menu li {
            margin-bottom: 0.5rem;
        }

        .admin-menu a {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            padding: 0.8rem 1.2rem;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .admin-menu a:hover,
        .admin-menu a.active {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding-left: 1.5rem;
        }

        .admin-menu a i {
            width: 20px;
            text-align: center;
        }

        .admin-main {
            margin-left: 280px;
            margin-top: 60px;
            padding: 2rem;
            min-height: calc(100vh - 60px);
        }

        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Dashboard Cards */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .card-header {
            font-size: 0.9rem;
            color: #999;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 1rem;
        }

        .card-value {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .card-desc {
            font-size: 0.95rem;
            color: #666;
        }

        .card-footer {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #f0f0f0;
        }

        .card-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .card-link:hover {
            gap: 1rem;
            color: var(--secondary);
        }

        /* Table Styles */
        .table-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #f0f0f0;
        }

        .table-header h2 {
            font-size: 1.5rem;
            color: var(--dark);
        }

        .search-box {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: #f5f5f5;
            border-radius: 10px;
            padding: 0.8rem 1.2rem;
        }

        .search-box i {
            color: #999;
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            font-size: 0.95rem;
            color: var(--dark);
            min-width: 250px;
        }

        .search-box input::placeholder {
            color: #999;
        }

        /* User List */
        .user-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .user-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 1.5rem;
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .user-item:hover {
            background: #f9f9f9;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #4a90e2 0%, #F1E5AC 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            flex-shrink: 0;
        }

        .user-info {
            flex-grow: 1;
        }

        .user-name {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0.3rem;
        }

        .user-role {
            font-size: 0.85rem;
            color: #999;
        }

        .user-status {
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status-active {
            background: #d4edda;
            color: #155724;
        }

        .status-inactive {
            background: #f8d7da;
            color: #721c24;
        }

        .user-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-action {
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 8px;
            background: #f0f0f0;
            color: var(--dark);
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .btn-action:hover {
            background: var(--primary);
            color: white;
        }

        .btn-primary {
            background: var(--gradient-1);
            color: white;
        }

        .btn-primary:hover {
            box-shadow: 0 5px 15px rgba(45, 90, 135, 0.3);
        }

        .page-title {
            font-size: 2rem;
            color: var(--dark);
            margin-bottom: 2rem;
            font-weight: bold;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .admin-sidebar {
                width: 100%;
                height: auto;
                position: static;
                background: linear-gradient(135deg, #2D5A87 0%, #4A7C8A 100%);
                padding: 1rem;
            }

            .admin-main {
                margin-left: 0;
                margin-top: 0;
                padding: 1rem;
            }

            .dashboard-cards {
                grid-template-columns: 1fr;
            }

            .table-header {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }

            .search-box {
                width: 100%;
            }

            .search-box input {
                min-width: auto;
                flex-grow: 1;
            }

            .user-item {
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>
    <div class="geometric-bg"></div>

    <!-- Admin Header -->
    <header class="admin-header">
        <nav class="admin-nav">
            <a href="../index (1).html" class="admin-logo">
                <div class="admin-avatar"><i class="fas fa-lock"></i></div>
                <div class="admin-logo-text">
                    Admin Portal
                </div>
            </a>
            <div class="admin-user-section">
                <div class="admin-user">
                    <div class="admin-user-name">Admin Staff</div>
                    <div class="admin-user-role">Teknis UPA TIK</div>
                </div>
                <div class="admin-avatar"><i class="fas fa-user"></i></div>
            </div>
        </nav>
    </header>
</body>

</html>
