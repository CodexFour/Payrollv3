<style>
    .section {
        display: flex;
        margin: 15px;
        width: fit-content;
    }

    .admin-content-header {
        display: flex;
        gap: 2rem;
        width: fit-content;
        height: fit-content;
        padding: 10px;

    }

    .card-content {
        width: 200px;
        height: 250px;
        display: flex;
        flex-direction: column;
        padding: 2.5rem;
        text-align: center;
        gap: 2rem;
    }

    .card-content-heading {
        min-width: 100px;
        min-height: 50px;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }



    .card-content-body {
        margin: auto;
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    @media screen and (min-width: 1024px) {

        .admin-content {
            overflow-x: unset;
        }

        .section {
            overflow-x: unset;
        }

        .chart {
            width: 650px;
        }
    }


    @media screen and (max-width: 1024px) {
        .admin-content-header {
            width: 100%;

        }

        .card-content {
            width: 150px;
            height: 220px;
        }

        .chart {
            width: 400px;
        }

        .txt-xs {
            font-size: 1.6rem;
        }

        .txt-xxs {
            font-size: 1.2rem;
        }

        .txt-m {
            font-size: 3rem;
        }

    }
</style>
<article id="dashboard" class="section">
    <div class="admin-content-header">
        <div class="card card-content">
            <div class="card-content-heading">
                <strong class="text-title txt-xs">TOTAL EMPLOYEES</strong>
                <span class="text-subtitle txt-xxs">Total Number of Employees</span>
            </div>
            <div class="card-content-body">
                <!--                        TODO: Change number of employees-->
                <strong class="text-bold txt-m">300</strong>
                <p class="text-subtitle txt-xxs">Employees</p>
            </div>
        </div>
        <div class="card card-content">
            <div class="card-content-heading">
                <strong class="text-title txt-xs">TOTAL SALARIES</strong>
                <span class="text-subtitle txt-xxs">Current Salaries Per Month</span>
            </div>
            <div class="card-content-body">
                <!--  TODO: Change amount of salary.
                                if 2500 -> 2.5K
                        -->
                <strong class="text-bold txt-m">500K</strong>
                <p class="text-subtitle txt-xxs">PHP</p>
            </div>
        </div>
        <div class="card card-content">
            <div class="card-content-heading">
                <strong class="text-title txt-xs">TOTAL LEAVES</strong>
                <span class="text-subtitle txt-xxs">Leave Summary</span>
            </div>
            <div class="card-content-body">
                <!--  TODO: Change total number of leaves.
                        -->
                <strong class="text-bold txt-m">20</strong>
                <p class="text-subtitle txt-xxs">LEAVES</p>
            </div>
        </div>
        <div class="card card-content">
            <div class="card-content-heading">
                <strong class="text-title txt-xs">TOTAL ABSENCES</strong>
                <span class="text-subtitle txt-xxs">Absence Summary</span>
            </div>
            <div class="card-content-body">
                <!--  TODO: Change date as well as the year.
                        -->
                <strong class="text-bold txt-m">200</strong>
                <p class="text-subtitle txt-xxs">Absences</p>
            </div>
        </div>
        <div class="card card-content chart" id="dashboardDataChart">
        </div>
    </div>


</article>