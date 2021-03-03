@extends('mainlayout.mainlayout')
@section('tittle')
<title>Product</title>
@endsection
@section('css')
 <link rel="stylesheet" href="{{asset('swiper/navigation-per-view.css')}}" />
  <link rel="stylesheet" href="{{asset('view_all/css/view-all.css')}}" />
  
@endsection
 @section('content')

    <div class="container mt-2">
      <p class="main-title">LĨNH VỰC KINH DOANH</p>
    </div>

    <div class="container">
      <p>Giống lúa</p>
    </div>

    <ul
      class="nav nav-pills mb-3 d-flex flex-row justify-content-center"
      id="pills-tab"
      role="tablist"
    >
      <li class="nav-item" role="presentation">
        <button
          class="nav-link btn btn-primary view-all-btn-tab active"
          id="pills-home-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-home"
          type="button"
          role="tab"
          aria-controls="pills-home"
          aria-selected="true"
        >
          Tất cả
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link btn btn-primary view-all-btn-tab"
          id="pills-profile-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-profile"
          type="button"
          role="tab"
          aria-controls="pills-profile"
          aria-selected="false"
        >
          Lúa thuần
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link btn btn-primary view-all-btn-tab"
          id="pills-contact-tab"
          data-bs-toggle="pill"
          data-bs-target="#pills-contact"
          type="button"
          role="tab"
          aria-controls="pills-contact"
          aria-selected="false"
        >
          Lúa lai
        </button>
      </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade show active"
        id="pills-home"
        role="tabpanel"
        aria-labelledby="pills-home-tab"
      >
        <div class="d-flex flex-row flex-wrap bd-highlight mb-3">
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
        </div>
      </div>

      <div
        class="tab-pane fade"
        id="pills-profile"
        role="tabpanel"
        aria-labelledby="pills-profile-tab"
      >
        <div class="d-flex flex-row flex-wrap bd-highlight mb-3">
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
        </div>
      </div>

      <div
        class="tab-pane fade"
        id="pills-contact"
        role="tabpanel"
        aria-labelledby="pills-contact-tab"
      >
        <div class="d-flex flex-row flex-wrap bd-highlight mb-3">
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
          <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
            <div class="bd-highlight slider-2__1">
              <img
                src="https://lh3.googleusercontent.com/lRkIatC9eyU5JvAufyuG-lmuZqO_v-NLeROb9nJUQ0JF6jmfWcSJxrxfDAlSvQxOIy9liouE5otByV0KNxJuXGk_yTdI9BTRjH6dfBfEYokzPSgb39y1qOiwBi9_2maC7COgO_vioXGebtjQY97Ue-zKTpXyfGGH-FEnCxGNteiEzX6xdpPe-90gKsbqOrKOJ2xdkLcsDUCaG5RY_LuMY-6BGzcUvD1vHtq7_DMxGFdw4ASoZ4n9OkB63gS9kI8W-acZSZtcTt4Tix-0cs0hHxXvqe58Ayvm3WuNgOy0bOZumn_H3_Um4xbxEsCPsFHCTVynjzIbZ8Ess5-sgtkHCm1tWYNJ7STvQBxwWeJ2aq1ec-VWs0tCGODP4n5ILPzgq_a7pTmdSwIudpEyqP6-InQe6sbIP1R84mrjHsLJzDDVd7kJmK4pceMNsNKZ7Wpo2T1rPAK8TdFnccomM4VmTwdmeojv00o46Li-Wm8Hj6-UyVIhYGilKcpH1p39RC_JJxJjQHUiumQLR0nct2zCCob3DqzWpdiF2xsV4tv5GhKD3spSWls4p9YYgM4Fzkn90IKZ8Q5KIlyM3f0o-KCjjmSlOjuhLeG4uIIA8xhM1Y7Ero7F8r-l0gcnS7v0KGbglVrm_xXDAyF5ic9YyGcfzqrcjf0w5OezcskNd8iH6T2Iz_2qNXFmK8FvsAw=w195-h150-no?authuser=0"
                alt="test"
              />
            </div>
            <div class="bd-highlight slider-2__2">
              <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
            </div>

            <div class="bd-highlight slider-2__3">
              <a href="#">Thương hiệu giống cây trồng</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  

 @endsection
 @section('js')

  <script src="{{asset('swiper/navigation-per-view/navigation-per-view.js')}}"></script>
@endsection