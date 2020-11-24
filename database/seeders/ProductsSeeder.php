<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Kinh tế trong cuộc cách mạng công nghệ 4.0',
            'description' => 'Không chỉ đưa ra toàn cảnh về kinh tế trong cuộc cách mạng công nghệ 4.0 mà Saifedean Ammous còn đưa người đọc vào một hành trình hấp dẫn xuyên suốt lịch sử của các công nghệ thực hiện các chức năng của tiền, từ hệ thống nguyên thủy của đá vôi, đến kim loại, tiền xu.
            Cuốn “Kinh tế trong cuộc cách mạng công nghệ 4.0” còn khám phá những gì đã mang lại cho những công nghệ này, vai trò của chúng và việc chúng mất đi như thế nào, cho người đọc hiểu rõ hơn những gì tạo ra tiền bạc, hệ quả của nó đối với những định hướng tương lai của cá nhân và xã hội. Ammous cho thấy không phải ngẫu nhiên mà những thành tựu cao nhất của loài người chỉ xuất hiện trong các xã hội được hưởng những lợi ích của chế độ tiền tệ lành mạnh, cũng không phải ngẫu nhiên mà sự sụp đổ tiền tệ thường đi kèm với sự sụp đổ văn minh. Đặc biệt hơn, cuốn sách còn giải thích hoạt động của Bitcoin một cách trực quan, cung cấp cho người đọc một khám phá hấp dẫn về sự phân nhánh của tiền thị trường tự do.
            Cuốn sách này không đưa cho bạn lời khuyên về đầu tư, mà nhắm đến việc giúp bạn hiểu được đặc tính kinh tế của mạng lưới Bitcoin và cách thức vận hành của nó, giúp người đọc có được hiểu biết trước khi quyết định muốn sử dụng nó hay không.',
            'avatar' => 'dau_tu-tai_chinh_1.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Saifedean Ammous',
            'pro_pub_id' => 'NXB Đại Học Kinh Tế Quốc Dân',
            'sale' => ''
        ]);
        Product::create([
            'name' => 'Người hùng ý tưởng',
            'description' => 'Cuộc thập tự chinh nào mà để nhắm đến nó ta lại chẳng cần đến tinh thần lạc quan và tham vọng?” – Paul Allen
            Cuốn sách là bức chân dung tự họa đa màu về một doanh nhân đa tài đứng sau những ý tưởng đột phá hình thành nên bản sắc không thể trộn lẫn của Microsoft ngay từ những ngày đầu. Còn Paul Allen, chủ nhân của bức chân dung ấy, là biểu tượng của tinh thần sáng tạo, không ngừng tìm tòi, học hỏi với những đóng góp lớn lao trong nhiều lĩnh vực, từ công nghệ đến khoa học, từ âm nhạc đến hàng không hay trí tuệ nhân tạo, từ đầu tư đến thể thao hay từ thiện. Dù làm bất kỳ công việc gì, xuất hiện ở bất kỳ đâu, Paul luôn cho những người xung quanh thấy khả năng “phiêu” cùng những ý tưởng đột phá, khả năng đơn giản hóa những điều phức tạp, từ đó mang lại những kết quả đầy bất ngờ. Đây đích thị là cuốn sách không thể bỏ lỡ đối với bất cứ ai yêu thích công nghệ, đam mê những
            ý tưởng đột phá được nảy nở từ “cỗ máy” ý tưởng mang tên Paul Allen.',
            'avatar' => 'dau_tu-tai_chinh_2.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 77.000,
            'author' => 'Paul Allen',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Mở rộng doanh nghiệp',
            'description' => 'Mở rộng doanh nghiệp sẽ là một trong những cuốn sách kinh doanh hay nhất mà bạn từng đọc.
            "Ý tưởng dẫn dắt một công ty đi từ chiếc ao nhỏ bé, tù túng ra biển lớn có thể đầy ắp những háo hức, nhưng cũng sẽ vô cùng gian nan nếu thiếu đi những hướng dẫn chi tiết. Thế nhưng, thông qua cuốn sách này, bạn sẽ tìm thấy những lời khuyên thiết thực, từ đó nắm rõ các cách thức mới mẻ giúp xây dựng đội nhóm, công ty khởi nghiệp và tổ chức hiệu quả hơn, đứng vững trước thử thách của thời gian. Cho dù bạn là một doanh nhân muốn mở rộng quy mô, một CEO muốn đưa doanh nghiệp của mình lên cấp độ tiếp theo, hay một nhà điều hành phi lợi nhuận muốn để lại di sản, Mở rộng doanh nghiệp chính là bộ hướng dẫn mà bạn đang cần, một nhân tố làm thay đổi cuộc sống."
            Tan Yinglan, tác giả cuốn Way of the VC (tạm dịch: Hành trình của nhà đầu tư mạo hiểm)',
            'avatar' => 'dau_tu-tai_chinh_3.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 110.000,
            'author' => 'Verne Harnish',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] 50 mô hình kinh điển cho tư duy chiến lược',
            'description' => 'Đây là bản tóm tắt của sách 50 mô hình kinh điển cho tư duy chiến lược. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Khi suy nghĩ của chúng ta bỗng trở nên hỗn loạn, chúng ta thường phát triển những hệ thống để thiết lập lại trật tự, để thấu hiểu hay ít nhất là bao quát được toàn bộ sự việc. Mô hình giúp giảm bớt sự phức tạp, bằng cách che đi phần lớn những thứ xung quanh và chỉ tập trung vào cái cốt yếu.
            Cuốn sách này được viết cho tất cả những ai thường xuyên phải đối mặt với những câu hỏi: Tôi phải quyết định vấn đề này như thế nào? Tôi nên khích lệ chính bản thân và đội ngũ của tôi như thế nào? Tôi có thể thay đổi sự việc này bằng cách nào? Thậm chí cả những câu hỏi như: Bạn bè tôi nói gì về tôi? Tôi có sống trong hiện tại không? Tôi muốn gì?...
            Trong 50 chương ngắn gọn, những kết nối phức tạp nhất trong cuộc sống của chúng ta được minh họa một cách đơn giản, những tình huống rối rắm được đơn giản hóa tối đa và được phân tích đầy khách quan.
            Đây là một cuốn sách bài tập. Bạn có thể áp dụng nguyên xi, bổ sung, gạch bỏ hay tiếp tục phát triển các mô hình. Một cuốn sách có tính ứng dụng cao với mọi tình huống trong cuộc sống và không thể thiếu với bất cứ ai muốn đưa ra quyết định',
            'avatar' => 'dau_tu-tai_chinh_4.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 50.000,
            'author' => 'Mikael Krogerus, Roman Tschappeler',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '50%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Cuộc chơi đầu tư mạo hiểm',
            'description' => 'Đây là bản tóm tắt của sách Cuộc chơi đầu tư mạo hiểm. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Tìm kiếm một nhà đầu tư cho công ty của bạn không phải là việc dễ dàng. Và khi tìm được rồi, bạn mong muốn nhà đầu tư sẽ là một đối tác thân thiện, chứ không phải gã độc tài, nhất nhất đòi bạn làm theo ý mình. Nếu muốn chiến thắng trong trò chơi liên doanh đó, bạn nên tham khảo cuốn sách này.
            Trong cuốn sách, Bussgang giới thiệu rất nhiều quan điểm độc đáo, kinh nghiệm quý giá mà mình thu thập từ kinh nghiệm bản thân cũng như từ những buổi phỏng vấn với các doanh nhân thành đạt.
            Bạn đọc sẽ học được làm thế nào để được chú ý, cách hoàn tất một vụ đàm phán, và cách thương lượng hiệu quả công việc với đối tác.
            Jeffrey Bussgang là cộng sự chính tại Flybridge Capital Partners, một quỹ đầu tư mạo hiểm quản lý khoảng 500 triệu Đô la Mỹ. Trước khi trở thành nhà đầu tư mạo hiểm, ông là một doanh nhân thành đạt, và là đồng sáng lập của Upromise. Ông cũng làm việc tại trường kinh doanh Harvard, nơi ông đã lấy bằng MBA loại xuất sắc.',
            'avatar' => 'dau_tu-tai_chinh_5.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Jeffrey Bussgang',
            'pro_pub_id' => 'NXB Thanh Niên',
            'sale' => '40%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Đầu tư mạo hiểm',
            'description' => 'Đây là bản tóm tắt của sách Đầu tư mạo hiểm. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Cơn ác mộng lớn nhất với các doanh nghiệp là vui mừng khi nhận được vốn đầu tư mà không hề biết tới những nguy hiểm tiềm ẩn đằng sau nguồn vốn đó. Lý do mấu chốt nằm ở chỗ các nhà đầu tư mạo hiểm hoàn toàn hiểu rõ các vấn đề về tài chính trong khi các chủ doanh nghiệp thì không. Vậy làm thế nào để các doanh nghiệp thoát được khỏi cái bẫy đầy cám dỗ đó? Câu trả lời nằm ngay trong cuốn “Đầu tư mạo hiểm”.
            Trước hết đầu tư mạo hiểm (VC) là việc cung cấp vốn tài chính cho các công ty ở giai đoạn khởi động tăng trưởng ban đầu. Các quỹ đầu tư mạo hiểm kiếm tiền bằng các sở hữu cổ phần trong các công ty được đầu tư. Điều quan trọng cần lưu ý ở đây là đầu tư mạo hiểm là một tập con của vốn chủ sở hữu tư nhân. Do vậy, nếu bạn chuẩn bị được nhận vốn VC thì bạn nên sẵn sàng đối mặt với các áp lực cũng như mất mát. Bạn phải học cách làm việc với các nhà đầu tư VC sao cho vẫn đảm bảo kế hoạch kinh doanh của mình, mà vẫn thỏa mãn các mục tiêu đã ký kết với các nhà đầu tư. Và ngay cả trong trường hợp công ty của bạn phá sản, thì các nhà đầu tư mạo hiểm vẫn sẽ thu về cho họ một khoản lợi nhuận từ 15%-50% tùy vào mức độ của dự án, do đó bạn đừng mong chờ sự giúp đỡ của các nhà đầu tư mạo hiểm nếu như bạn không thực sự vạch ra được một kế hoạch khả thi và đem tiền về cho họ.
            Nói đến đây chắc bạn cũng đã hiểu được nguồn vốn đầu tư mạo hiểm tiềm ẩn nhiều rủi ro đến như thế nào. Tuy nhiên, không chỉ dừng lại ở các rủi ro về tài chính, đầu tư mạo hiểm còn tiềm ẩn những nguy hiểm trong điều khoản hợp đồng và các vấn đề pháp lý liên quan. Tuy nhiên, bạn không cần quá lo lắng vì mọi vấn đề trên đều được nói đến và khắc phục trong cuốn “Đầu tư mạo hiểm” – một trong những cuốn sách cần thiết cho các chủ doanh nghiệp. Trong cuốn sách này Bard Feld và Jason Medelson sẽ chỉ cho bạn những điều nên và không nên trong đàm phán với các nhà đầu tư mạo hiểm, cách xem xét các điều khoản hợp đồng, và quan trọng hơn cả là quy trình của một thương vụ đầu tư mạo hiểm.',
            'avatar' => 'dau_tu-tai_chinh_6.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Brad Feld, Jason Medelson',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] HBR Guide To - Tài chính dành cho sếp',
            'description' => 'Đây là bản tóm tắt của sách HBR Guide To - Tài chính dành cho sếp. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Mặc dù bạn là một nhà quản lý không chuyên về tài chính, nhưng các vấn đề tài chính vẫn luôn ảnh hưởng đến sự nghiệp của bạn theo nhiều cách khác nhau. Tài chính dành cho sếp sẽ mang lại các công cụ và sự tự tin bạn cần để nắm vững những vấn đề cơ bản về tài chính mà mọi nhà quản lý giỏi phải biết. Bạn sẽ học cách để:
            Hiểu các thuật ngữ tài chính
            So sánh tình hình tài chính của công ty mình với đối thủ
            Chuyển sự chú ý từ doanh thu sang lợi nhuận
            Sử dụng dữ liệu tài chính để đánh giá các đề xuất tài chính
            Đầu tư thông minh hơn',
            'avatar' => 'dau_tu-tai_chinh_7.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Pat Flynn',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '60%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] HBR Guide To - Chắp cánh ý tưởng kinh doanh',
            'description' => 'Đây là bản tóm tắt của sách HBR Guide To - Chắp cánh ý tưởng kinh doanh. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Bạn có một ý tưởng tuyệt vời giúp gia tăng doanh thu và cải tiến năng suất nhưng cần thuyết phục mọi người tin vào điều đó. Hãy xây dựng nó thành một đề xuất kinh doanh thể hiện giá trị của sáng kiến. Việc này không phải lúc nào cũng dễ dàng: có thể bạn không biết các bên hữu quan tin tưởng vào loại dữ liệu gì, hoặc có thể bạn bị các số liệu dọa đến lo lắng. Chắp cánh ý tưởng kinh doanh sẽ giúp bạn xây dựng một đề xuất thuyết phục và học được cách:
            Khẳng định doanh nghiệp cần ý tưởng của bạn;
            Gắn kết ý tưởng với các mục tiêu chiến lược;
            Lập nhóm để định hình và thử nghiệm ý tưởng;
            Tính toán lợi nhuận trên đầu tư;
            Phân tích rủi ro và cơ hội;
            Trình bày với các bên hữu quan.',
            'avatar' => 'dau_tu-tai_chinh_8.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Tạp chí Kinh doanh Harvard',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '60%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] HBR Guide To - Đưa dự án đến thành công',
            'description' => 'Đây là bản tóm tắt của sách HBR Guide To - Đưa dự án đến thành công. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Bạn có kiểm soát được phạm vi dự án của mình khi các bên hữu quan ưa đòi hỏi cứ tấn công liên tục và vạch ra một lịch trình mà ai cũng phải bám sát? Cuốn sách HBR Guide To - Đưa dự án đến thành công sẽ cung cấp cho bạn các công cụ cần thiết để định ra các mục tiêu khôn ngoan, hoàn thành chúng và rút ra bài học cho các dự án trong tương lai. Bạn sẽ có thể:
            Xây dựng một nhóm dự án tập trung và vững mạnh.
            Phân mục tiêu lớn thành các nhiệm vụ dễ quản lý.
            Lập lịch trình mà bạn có thể kiểm soát mọi giai đoạn.
            Theo dõi dự án dựa trên mục tiêu.
            Quản lý kỳ vọng của các bên hữu quan.
            Xúc tiến dự án và đưa nó đến thành công.',
            'avatar' => 'dau_tu-tai_chinh_9.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Tạp chí Kinh doanh Harvard',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '60%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Bất động sản căn bản',
            'description' => 'Đây là bản tóm tắt của sách HBR Guide To - Đưa dự án đến thành công. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Bạn có kiểm soát được phạm vi dự án của mình khi các bên hữu quan ưa đòi hỏi cứ tấn công liên tục và vạch ra một lịch trình mà ai cũng phải bám sát? Cuốn sách HBR Guide To - Đưa dự án đến thành công sẽ cung cấp cho bạn các công cụ cần thiết để định ra các mục tiêu khôn ngoan, hoàn thành chúng và rút ra bài học cho các dự án trong tương lai. Bạn sẽ có thể:
            Xây dựng một nhóm dự án tập trung và vững mạnh.
            Phân mục tiêu lớn thành các nhiệm vụ dễ quản lý.
            Lập lịch trình mà bạn có thể kiểm soát mọi giai đoạn.
            Theo dõi dự án dựa trên mục tiêu.
            Quản lý kỳ vọng của các bên hữu quan.
            Xúc tiến dự án và đưa nó đến thành công.',
            'avatar' => 'dau_tu-tai_chinh_10.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Gary W. Eldred',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '60%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] - 100 lời khuyên đầu tư bất động sản khôn ngoan nhất',
            'description' => 'Đây là bản tóm tắt của sách 100 lời khuyên đầu tư bất động sản khôn ngoan nhất. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Donald Trump đã tập hợp trong cuốn sách tuyệt vời này 100 lời khuyên đầu tư bất động sản khôn ngoan nhất từ các chuyên gia đầu tư bất động sản hàng đầu thế giới. Đây là loại thông tin và sự khôn ngoan mà bạn chỉ có thể nhận được từ kinh nghiệm sống.
            Trong cuốn sách này, bạn sẽ thấy sự sáng suốt khác thường có được là nhờ vào những kinh nghiệm và bài học mà những nhân vật có thế lực trong kinh doanh bất động sản trên khắp nước Mỹ phải trải bao khó khăn mới rút ra được. Có rất nhiều điều mà lẽ ra tất cả chúng ta đã có thể làm tốt hơn: từ việc bỏ lỡ cơ hội, dự đoán sai về thị trường đến việc thương lượng quá cao hoặc quá thấp. Những nhà kinh doanh này - cả nam lẫn nữ sẽ kể cho bạn biết họ đã học được gì.
            "Khi bán bất động sản, bạn chỉ phải trả thuế nếu bạn muốn, khi bạn muốn và tùy bạn quyết định bao nhiêu."
            - Gary Gorman - Người sáng lập tổ chức 1031 Exchange Experts.',
            'avatar' => 'dau_tu-tai_chinh_11.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Donald J.Trump',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '50%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Cha giàu dạy đầu tư',
            'description' => 'Đây là bản tóm tắt của sách Cha giàu dạy đầu tư. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Đừng bận tâm tới các vấn đề tài chính, hãy để đồng tiền phục vụ cho bạn, nghỉ hưu sớm và bạn có thể tận hưởng cuộc sống và làm bất cứ điều gì bạn quan tâm!
            Cha giàu dạy đầu tư là hướng dẫn đầu tư dài hạn dành cho những ai muốn trở thành nhà đầu tư giỏi và học cách đầu tư như thế nào vào những nơi chỉ có những nhà đầu tư giàu có mới có thể làm. Điều này không đảm bảo hoàn toàn. Bạn không thể trở nên giàu có một cách nhanh chóng, vì chắc chắn một điều rằng bạn sẽ đánh mất vận may của mình ngay khi bạn có được chúng. Giàu có qua các thế hệ có thể giúp con cái, cháu chắt của bạn không phải lo lắng về vấn đề tài chính – điều này chỉ có thể có khi bạn nghiên cứu và học tập không ngừng.',
            'avatar' => 'dau_tu-tai_chinh_12.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 20.000,
            'author' => 'Robert T. Kiyosaki',
            'pro_pub_id' => 'Đang cập nhật',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Cha giàu dạy đầu tư',
            'description' => 'Đây là bản tóm tắt của sách Cuộc chơi khởi nghiệp. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Đầu tư mạo hiểm đã không còn là một thuật ngữ quá mới mẻ ở Việt Nam trong vòng một thập kỷ qua, khi hàng loạt các công ty khởi nghiệp đã được các nhà đầu tư mạo hiểm rót vốn thành công, tạo nên những tên tuổi lớn trong ngành công nghệ và truyền thông như VNG, VCcorp, Vatgia, Goldsun Focus Media, hay YanTV. Tuy nhiên, điều vẫn còn bí ẩn với rất nhiều doanh nhân có lẽ là câu hỏi: Các nhà đầu tư mạo hiểm suy nghĩ và ra quyết định như thế nào, hay nói cách khác là làm thế nào để một công ty khởi nghiệp lọt được vào mắt xanh của những nhà đầu tư đầy kinh nghiệm?
            “Cuộc chơi khởi nghiệp” (The Start-up Game) của William H. Draper III (Bill Draper) cho ta những câu trả lời sâu sắc cho những điều doanh nhân khởi nghiệp quan tâm, và thực tế là, cuốn sách đã cho người đọc nhiều hơn thế.',
            'avatar' => 'dau_tu-tai_chinh_13.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 30.000,
            'author' => 'Mark Victor Hansen, Robert G. Allen',
            'pro_pub_id' => 'Đang cập nhật',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Phù thủy sàn chứng khoán (Thế hệ mới)',
            'description' => 'Cuốn sách gồm một loạt các cuộc phỏng vấn với các nhà giao dịch thành công và nổi tiếng nhất, với nhiều chi tiết nhất về câu chuyện thành công và những bí mật kinh nghiệm chuyên môn của họ. Ngoài ra, cuốn sách không thể thiếu sự thật về sự nghiệp giao dịch của các nhà quản lý quỹ đầu tư vĩ đại nhất, các nhà giao dịch hàng đầu và các nhà đầu tư chứng khoán tư nhân: từ Richard Dennis, huyền thoại của Sàn chứng khoán Chicago kiêm người sáng lập của Turtles; đến nhà vô địch giao dịch Martin “Buzzy” Schwartz; hay William O`Neil trứ danh, và cả Paul Tudor Jones, người đứng đầu của quỹ đầu tư với lợi nhuận hằng năm trong 5 năm liên tục là 100%.
            Qua cuốn sách, bạn đọc sẽ biết: Các phù thủy trên sàn đã “thao túng” thị trường chứng khoán Mỹ bằng cách nào?',
            'avatar' => 'dau_tu-tai_chinh_14.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 35.000,
            'author' => 'Jack D. Schwager',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Quá lớn để gọi là nhỏ - Bỏ 1 Đô Kiếm Tiền Triệu Đô',
            'description' => '“Quá Lớn Để Gọi Là Nhỏ - Bỏ 1 Đô Kiếm Tiền Triệu Đô” của Doug Tatum đã khám phá ra thực tế của sự phát triển bằng cách tập trung vào giai đoạn then chốt trong vòng đời của một doanh nghiệp, khoảng thời gian mà một doanh nghiệp đang phát triển quá lớn để gọi là nhỏ nhưng lại quá nhỏ để được coi là lớn - hay theo cách gọi của tác giả thì đây chính là giai đoạn “Mảnh đất không người”.
            Việc hiểu rõ những thực tế của giai đoạn chuyển đổi đặc biệt này có thể giúp bạn đưa ra những quyết định đúng đắn, rõ ràng về phương pháp phát triển doanh nghiệp và trong một số trường hợp là đưa ra quyết định xem liệu có nên phát triển doanh nghiệp hay không. Nếu bạn là một người chủ doanh nghiệp, cuốn sách này sẽ đưa bạn tới một vị trí tốt hơn để bạn phát triển công ty của mình theo tất cả các mặt mà nó có thể phát triển và không kém phần quan trọng là theo tất cả các mặt mà bạn muốn nó phát triển thành. Còn nếu bạn đang mơ ước trở thành một người chủ doanh nghiệp thì “Quá lớn để gọi là nhỏ: Bỏ 1 đô kiếm tiền triệu đô” sẽ cung cấp cho bạn sự chuẩn bị cần thiết để tiến vào một lối đi có thể còn hoang sơ hơn cả những gì bạn có thể tưởng tượng.',
            'avatar' => 'dau_tu-tai_chinh_15.jpg',
            'pro_att_id' => 'Đầu tư - Tài chính',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 35.000,
            'author' => 'Doug Tatum',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Khởi nghiệp thành công từ nhà đầu tư mạo hiểm',
            'description' => 'Với hơn 30 năm kinh nghiệm trong lĩnh vực đầu tư mạo hiểm, Tim Draper đã hỗ trợ, chỉ dẫn, dạy dỗ, tư vấn và cấp vốn cho hàng trăm Anh hùng Khởi nghiệp. Theo Tim, Anh hùng Khởi nghiệp là những người thúc đẩy sự tiến bộ, người không chỉ muốn thay đổi thế giới mà còn có một niềm tin mạnh liệt rằng mình cần phải thay đổi thế giới, mà còn có một niềm tin mãnh liệt rằng mình cần phải thay đổi thế giới. Ông tin rằng với một chút rèn luyện và một định hướng đúng, bất cứ ai cũng có thể trở thành một Anh hùng Khởi nghiệp.
            Chính vì vậy, ông đã viết nên cuốn sách How to be the Startup Hero – Khởi nghiệp thành công từ nhà đầu tư mạo hiểm với nội dung chứa đầy những cơ hội và những ý tưởng để tiến hành khởi nghiệp, những câu chuyện để học hỏi và thúc đẩy các doanh nhân thay đổi các nghành công nghiệp, cải thiện chính phủ và giúp đỡ xã hội. Hãy đọc cuốn sách này và biết đâu bạn cũng sẽ trở thành một Anh hùng Khởi nghiệp.',
            'avatar' => 'khoi_nghiep_1.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Tim Draper',
            'pro_pub_id' => 'NXB Đại Học Kinh Tế Quốc Dân',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Khởi nghiệp nhanh mà chắc',
            'description' => 'Nếu bạn đang tìm cách để có thể quản trị và giảm thiểu những bất lợi trên hành trình khởi nghiệp, cuốn sách này chính là điều bạn cần.
            Thứ nhất, kinh doanh không phải dành cho tất cả mọi người. Chỉ vì bạn bị sa thải hoặc chán ngấy công việc hiện tại không có nghĩa là bạn hiện đang sở hữu những gì cần thiết để tạo ra và xây dựng một cái gì đó có ý nghĩa.
            Thứ hai, có chút lợi thế để trở thành doanh nhân không đảm bảo rằng bạn thực sự sẽ thành công. Cuốn sách này sẽ chỉ ra bảy thách thức lớn mà bạn có thể gặp phải. Hãy chấp nhận thực tế rằng rất nhiều doanh nghiệp khởi nghiệp thất bại. Nhưng điều đó không có nghĩa rằng bạn không có khả năng. Như chúng ta sẽ thảo luận, thường thì những thứ nằm ngoài sự kiểm soát của bạn lại là tác nhân chính khiến công ty khởi nghiệp của bạn không thành công.
            Thứ ba, hãy nhớ rằng gần như không có chuyện mọi thứ lúc nào cũng diễn ra theo kế hoạch. Phần lớn cuốn sách này tập trung vào cách xử lý những điều xảy ra bất ngờ hoặc bạn chưa sẵn sàng đón nhận. Thật vậy, hy vọng rằng bạn sẽ nhận được thông điệp cốt lõi mà chúng tôi đang cố gắng chuyển tải: Hãy chuẩn bị một kế hoạch và đảm bảo rằng kế hoạch đó bao gồm cả những việc không theo kế hoạch!
            Có rất nhiều cuốn sách “dạy kinh doanh”, nhưng không có cuốn nào giống cuốn này. Hầu hết các cuốn sách đều nói về cơ chế khởi động một dự án khởi nghiệp và thường có xu hướng tập trung nhiều hơn vào các yếu tố cơ bản của việc mở một cửa hàng bán lẻ nhỏ hoặc công ty tư vấn một thành viên. Với Khởi nghiệp nhanh mà chắc, chúng tôi quan tâm nhiều hơn đến những người có ước mơ lớn, với khả năng, kinh nghiệm và động lực lớn, những người sẵn sàng tự mình bứt phá hoặc đã bứt phá',
            'avatar' => 'khoi_nghiep_2.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 35.000,
            'author' => 'David N. Feldman',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '15%'
        ]);
        Product::create([
            'name' => 'Khởi nghiệp kinh doanh thời 4.0',
            'description' => 'Mỗi người đều có một ý tưởng của riêng mình, tuy nhiên, không phải ai cũng biết để được thực hiện chúng. “Khởi nghiệp kinh doanh thời 4.0” sẽ giúp bạn thực hiện ý tưởng của mình. Trong cuốn sách này, bạn sẽ tìm thấy những đoạn trích từ cuộc phỏng vấn độc quyền những người sáng lập và đồng sáng lập của các công ty phần mềm trị giá hàng triệu đô la như Hot Jar, Buzz Sumo và Unbounce chia sẻ những lời khuyên thực tế từ hành trình của họ.
            Và bạn sẽ:
            Thay đổi tư duy
            Có ý tưởng kinh doanh khác biệt
            Sáng tạo và đam mê
            Tạo dựng thương hiệu cá nhân
            Can đảm đương đầu với thách thức
            Kiên trì theo đuổi mục tiêu
            Cuốn sách này dành cho bất kỳ ai muốn thành công trong vai trò người khởi nghiệp. Bạn hãy coi cuốn sách này như một công cụ học tập tốc độ cao, để làm quen với vô số những khái niệm mà bạn cần thiết để bắt đầu. Cũng như với bất kỳ dự án tham vọng lớn lao nào, bạn có thể đào sâu vào hơn vào bất cứ khái niệm nào khiến bạn hứng thú để tìm ra đâu là những điều quan trọng nhất để thực hiện mục tiêu của mình.',
            'avatar' => 'khoi_nghiep_3.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 35.000,
            'author' => 'Josh MacDonald',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '25%'
        ]);
        Product::create([
            'name' => 'Cú hích khởi nghiệp',
            'description' => 'Chúng ta dễ dàng thấy được sức mạnh toát ra từ những con người dám đứng lên và khởi xướng “phong trào” của riêng họ, đó có thể là khởi xướng một ý tưởng, khởi động một chiến dịch và phổ biến nhất là khởi phát một công ty.
            Bằng vốn sống và kinh nghiệm thương trường dày dạn của mình, tác giả Jennifer Dulski đã chắt lọc những ý kiến của bản thân trong một cuốn sách đáng giá viết về chủ đề khởi xướng phong trào mang tên “Cú hích khởi nghiệp”. Cuốn sách là lời kêu gọi đầy cảm hứng, truyền sức mạnh cho bất cứ ai muốn thay đổi thế giới này.
            Đặc biệt hơn nữa cuốn sách không xoay quanh những con người nắm trong tay vô vàn quyền hạn và trách nhiệm, mà nó tập trung nói về cách những con người bình thường tạo nên điều phi thường. Và dưới con mắt chuyên gia của tác giả, bất cứ ai cũng có thể tạo ra sự đổi thay nếu họ tin tưởng vào quyền năng sức mạnh mà hành động của họ tạo nên, bất kể địa điểm hay phạm vi.
            Và đã đến lúc bạn phải tự hỏi mình, rằng bạn muốn trở thành người bình thường hay người bình thường tạo ra những điều phi thường?',
            'avatar' => 'khoi_nghiep_4.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 30.000,
            'author' => 'Jennifer Dulski',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '25%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Thành phố khởi nghiệp',
            'description' => 'Đây là bản tóm tắt của sách Thành phố khởi nghiệp. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Gabe Klein là một doanh nhân khởi nghiệp với nhiều dự án khởi nghiệp táo bạo như: xe buýt phục vụ đồ ăn nhanh On the Fly, xe hơi chia sẻ Zipcar (dự án này còn ra đời trước Uber và Grab).
            Với tư duy của một doanh nhân và óc tổ chức của một nhà lãnh đạo, anh luôn nung nấu mong muốn có thể làm gì đó để thay đổi bộ mặt giao thông của thành phố, áp dụng tinh thần khởi nghiệp táo bạo vào cung cách làm việc cũ kỹ của chính phủ và thổi làn gió mới vào nhận thức của người dân về tầm quan trọng của giao thông đô thị. Cơ hội đã đến khi Gabe Klein được chính quyền thành phố Washington, D.C. mời về làm Giám đốc Sở Giao thông Vận tải. Tại đây, bằng tài năng và sự nhiệt huyết cùng tư duy đổi mới, anh đã xây dựng được làn đường dành cho xe đạp ngay giữa đại lộ Pennsylvania (trong lòng thành phố Washington), áp dụng phương pháp S.M.A.R.T vào giải quyết ổ gà ở cả D.C và Chicago, cải tạo đường ven sông Chicago Riverwalk,…
            Tất cả những kỳ tích và hiệu quả công việc của Klein đã cho thấy nếu chính phủ có thể bắt tay hợp tác với các doanh nghiệp tư nhân trong việc xây dựng đô thị, họ sẽ giải quyết được bài toán khó khăn về kinh phí, nguồn nhân lực và thời gian cải tạo. Từ đó, chính quyền thành phố có thể xây dựng hệ sinh thái khởi nghiệp và các doanh nghiệp có thể tạo ra đổi mới sáng tạo trong kinh doanh.',
            'avatar' => 'khoi_nghiep_5.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 30.000,
            'author' => 'Gabe Klein, David Vega-Barachowitz',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '25%'
        ]);
        Product::create([
            'name' => 'Burn the business plan - Câu chuyện khởi nghiệp từ những gã khổng lồ công nghệ',
            'description' => 'Mọi trường học kinh doanh đều thuyết giảng: Nền tảng quan trọng nhất khi bắt đầu xây dựng một doanh nghiệp là lập kế hoạch kinh doanh. Nhưng Carl J. Schramm thì nói: Nhảm nhí.
            Đốt cháy hết mớ kế hoạch kinh doanh của các bạn đi, những điều thật-sự-quan-trọng cần làm khi khởi nghiệp không liên quan gì tới thứ mỹ miều ấy. Có quá nhiều hiểu nhầm tai hại đang diễn ra trong cộng đồng khởi nghiệp. Và nếu như bạn đang cảm thấy bối rối giữa điều gì thật sự hữu ích, còn điều gì thì không - thì hãy tìm đọc cuốn sách này, để biết được chính xác các công ty khởi nghiệp ưu tú nhất đã làm gì để thành công.
            Trong cuốn sách “Burn The Business Plan: Câu chuyện khởi nghiệp từ những gã khổng lồ công nghệ”, Carl J. Schramm, người được mệnh danh là “nhà truyền giáo của tinh thần khởi nghiệp” đã đập tan những truyền thuyết thần bí về bản kế hoạch kinh doanh. Bằng câu chuyện thực tế của những công ty công nghệ hàng đầu như Apple, Microsoft, Facebook…; đồng thời cung cấp bộ công cụ và những lời khuyên đắt giá để giúp bạn xây dựng doanh nghiệp khởi nghiệp thành công; tác phẩm được đánh giá là cuốn sách viết về tư duy khởi nghiệp tân tiến nhất hiện nay.
            Nếu bạn vẫn còn đang bối rối với bản kế hoạch kinh doanh trong tay mình, thì hãy đọc hết cuốn sách này, sau đó mạnh dạn đốt cháy nó, và tận hưởng trọn vẹn hành trình khởi nghiệp đầy ắp những điều bất ngờ!',
            'avatar' => 'khoi_nghiep_6.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Carl J. Schramm',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => 'Đừng khởi sự khi còn do dự',
            'description' => 'Cuốn sách bao gồm các hướng dẫn chi tiết và cụ thể cho quá trình triển khai ý tưởng khởi nghiệp kinh doanh của tác giả Pat Flynn – từ một người làm công bị công ty sa thải đã trở thành ông chủ xây dựng nhiều doanh nghiệp thành công, giúp người đọc đánh giá và xác định ý tưởng mới của mình thông qua một loạt bài thực nghiệm tư duy, khám phá những chi tiết về ý tưởng mục tiêu, đánh giá thị trường và phân tích thông tin để triển khai ý tưởng.
            Các bước chuẩn bị và đánh giá ý tưởng kinh doanh được tác giả so sánh với các khâu chuẩn bị bay của máy bay, mỗi bước ứng với các phần:
            Phần I: Thiết kế nhiệm vụ: Kiểm tra xem ý tưởng mục tiêu có phù hợp và có thể thành công hay không thông qua một loạt bài tập thực nghiệm tư duy.
            Phần II: Phòng thí nghiệm phát triển: Khám phá những chi tiết quan trọng về ý tưởng mục tiêu: Nghiên cứu các ý tưởng và sắp xếp chúng thành một khái niệm hoàn chỉnh và dễ chia sẻ => mường tượng hình dạng và cách thức thực hiện ý tưởng => xác định hướng đi đúng đắn.
            Phần III: Chuẩn bị cho chuyến bay: Tiếp cận thị trường để tìm hiểu về sản phẩm/đối thủ cạnh tranh => tìm lợi thế độc quyền.
            Phần IV: Thiết bị mô phỏng chuyến bay: Tổng hợp tất cả thông tin tìm hiểu được từ nghiên cứu để chính thức đánh giá và kiểm nghiệm ý tưởng trong một phân khúc nhỏ của thị trường mục tiêu.
            Phần V: Sẵn sàng xuất kích: Phân tích lần cuối để đảm bảo chắc chắn về kế hoạch theo đuổi ý tưởng, tiếp tục các bước đi tiếp theo để hiện thực hóa ý tưởng và triển khai ý tưởng thành công.',
            'avatar' => 'khoi_nghiep_7.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Pat Flynn',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => 'Nghệ thuật quản trị khởi nghiệp',
            'description' => 'Là người sáng lập hay doanh nhân khởi nghiệp, bạn có hàng ngàn việc phải làm: từ đưa ra sản phẩm khả thi tối thiểu đến phát triển tương tác khách hàng, từ tuyển dụng thành viên nhóm đến quản lý sổ sách, v.v... Sớm hay muộn, với mong muốn mở rộng công ty của mình hơn nữa, một ban giám đốc gồm 3-5 người là một điều tất yếu đối với bạn và những người đồng sự.
            Trong Nghệ thuật quản trị khởi nghiệp, Brad Feld, một nhà đầu tư mạo hiểm từng là doanh nhân, sẽ chia sẻ kinh nghiệm về lĩnh vực này bằng cách cung cấp thông tin về:
            Quá trình lựa chọn thành viên ban giám đốc, phỏng vấn nhiều người, tham khảo ý kiến từ các nguồn đáng tin cậy và sẵn sàng từ chối người không phù hợp;
            Tầm quan trọng của việc tổ chức các cuộc họp ban giám đốc, cách kết hợp thời gian dành cho công việc và thời gian giao lưu tạo dựng quan hệ, v.v...;
            Trở thành thành viên ban giám đốc ở một công ty khác để có những quan sát hai chiều;
            Và nhiều thông tin thú vị khác nữa...',
            'avatar' => 'khoi_nghiep_8.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Brad Feld, Mahendra ramsinghani',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => 'Thành phố khởi nghiệp',
            'description' => 'Gabe Klein là một doanh nhân khởi nghiệp với nhiều dự án khởi nghiệp táo bạo như: xe buýt phục vụ đồ ăn nhanh On the Fly, xe hơi chia sẻ Zipcar (dự án này còn ra đời trước Uber và Grab).
            Với tư duy của một doanh nhân và óc tổ chức của một nhà lãnh đạo, anh luôn nung nấu mong muốn có thể làm gì đó để thay đổi bộ mặt giao thông của thành phố, áp dụng tinh thần khởi nghiệp táo bạo vào cung cách làm việc cũ kỹ của chính phủ và thổi làn gió mới vào nhận thức của người dân về tầm quan trọng của giao thông đô thị. Cơ hội đã đến khi Gabe Klein được chính quyền thành phố Washington, D.C. mời về làm Giám đốc Sở Giao thông Vận tải. Tại đây, bằng tài năng và sự nhiệt huyết cùng tư duy đổi mới, anh đã xây dựng được làn đường dành cho xe đạp ngay giữa đại lộ Pennsylvania (trong lòng thành phố Washington), áp dụng phương pháp S.M.A.R.T vào giải quyết ổ gà ở cả D.C và Chicago, cải tạo đường ven sông Chicago Riverwalk,…
            Tất cả những kỳ tích và hiệu quả công việc của Klein đã cho thấy nếu chính phủ có thể bắt tay hợp tác với các doanh nghiệp tư nhân trong việc xây dựng đô thị, họ sẽ giải quyết được bài toán khó khăn về kinh phí, nguồn nhân lực và thời gian cải tạo. Từ đó, chính quyền thành phố có thể xây dựng hệ sinh thái khởi nghiệp và các doanh nghiệp có thể tạo ra đổi mới sáng tạo trong kinh doanh.',
            'avatar' => 'khoi_nghiep_9.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 30.000,
            'author' => 'Gabe Klein, David Vega-Barachowitz',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => 'Khởi nghiệp cuối tuần',
            'description' => 'Cuốn sách đưa ra những thực tiễn tốt nhất, những bài học kinh nghiệm và các ví dụ từ những sự kiện Khởi nghiệp cuối tuần. Cuốn sách còn đưa ra những lời khuyên quan trọng để từng bước đưa ý tưởng vào thực hiện, chẳng hạn như:
            - Học cách thuyết trình về ý tưởng trong 60 giây;
            - Học cách tạo ra sản phẩm khả thi tối thiểu đưa doanh nghiệp tiến tới thị trường nhanh hơn;
            - Học cách bước ra khỏi vùng an toàn khi làm việc nhóm;
            - Hiểu được kết quả cho các công ty khởi nghiệp khi những doanh nhân và nhà sáng lập bắt đầu làm nhiều hơn, nhanh hơn;
            - Thực hiện mô hình kinh doanh khởi nghiệp: lắng nghe, thực hiện và tinh gọn.
            “Startup Weekend là một hiện tượng toàn cầu đã thu hút và khuyến khích thế hệ các doanh nhân mới. Startup Weekend đã thay đổi thế giới, và cuốn sách này sẽ thay đổi cách bạn nghĩ về khởi nghiệp” – David Cohen, nhà sáng lập và CEO của TechStars
            “Có rất nhiều người muốn trở thành doanh nhân nhưng họ không biết làm thế nào để bắt đầu. Bạn đưa đam mê và ý tưởng vào một nhóm, một sản phẩm, và một công ty khởi nghiệp như thế nào? Startup Weekend đã trao quyền cho hàng nghìn doanh nhân trên toàn cầu khởi động những giấc mơ khởi nghiệp của họ. Nếu bạn muốn thành lập một doanh nghiệp, dừng mơ về nó và hãy làm đi – cuốn sách này có thể dạy bạn cách để thực hiện!” – Neil Patel, nhà sáng lập của Crazy Egg và KISSmetrics.',
            'avatar' => 'khoi_nghiep_10.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 35.000,
            'author' => 'Marc Nager, Clint Nelsen, Franck Nouyriga',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => 'Thuật khởi nghiệp',
            'description' => 'Đây là cuốn sổ tay khởi nghiệp cơ bản, bao hàm trí tuệ sâu rộng, những lời khuyên bổ ích và nét hóm hỉnh phản ánh cả hành trình thành công lẫn thất bại của Kawasaki." - Arianna Huffington
            "Nếu quy đổi tri thức ra tiền tệ, Thuật Khởi Nghiệp sẽ là một mỏ vàng!" - Adrienne Young
            "Đây là cẩm nang hình thành tư duy khởi nghiệp thành công của Kawasaki... Thậm chí nếu chỉ được chọn một, bạn cũng nên chọn cuốn sách này." - Geoffrey James
            "Đây là cuốn sách phải đọc đối với mọi doanh nhân khởi nghiệp." - Mark Cuban
            "Dù tôi đã nghiêm túc cố gắng vạch lá tìm sâu đối với đứa con tinh thần của Kawasaki, nhưng đó quả là một pháo đài kiên cố." - Matthew May
            "Lý do cuốn sách này tối cần thiết với mọi doanh nhân khởi nghiệp không chỉ vì kho lời khuyên phong phú cùng bí quyết hành động được hun đúc từ chính quá trình trải nghiệm thương trường của tác giả, mà còn bởi Kawasaki đã khéo léo truyền đạt chúng thông qua nguồn ví dụ minh họa dồi dào và lời lẽ dung dị đầy lay động." - Akira Hirai',
            'avatar' => 'khoi_nghiep_11.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Guy Kawasaki',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => 'Những ngã rẽ nghề nghiệp',
            'description' => 'Những điều các bạn trẻ cần biết về định vị sự nghiệp và cuộc sống trong thời đại 4.0.
            “Selingo mang đến một bản đồ hành trình quan trọng để định vị thế giới của giáo dục bậc cao. Đây là một cẩm nang hướng dẫn cần thiết để hiểu được điều mình nên kỳ vọng từ trường đại học và làm thế nào để chuẩn bị cho một công việc hiệu quả sau đó. Ngôn ngữ rõ ràng, dễ hiểu của cuốn sách càng làm tăng thêm giá trị của nó.” _ Janet Napolitano, Chủ tịch Đại học California, Cựu Bộ trưởng An ninh Quốc gia và Cựu Thống đốc Bang Arizona.
            “Jeffrey Selingo đã trình bày những thay đổi cơ bản làm rối loạn quá trình chuyển đổi sang tuổi trưởng thành của những người trẻ; làm nổi bật những sự chuyển biến mới hình thành và cần thiết cho việc truyền tải giáo dục bậc cao; và cùng lúc đó, đưa ra cho sinh viên và phụ huynh những chỉ dẫn thực tế trong việc lập biểu đồ cho khóa học tốt nhất.” _ Hilary Pennington, Chủ tịch Quỹ Ford về Giáo dục, Sáng tạo và Sự thể hiện tự do.
            “Trong thời kỳ mà công việc và con đường sự nghiệp có xu hướng thay đổi – và thậm chí là hoàn toàn bốc hơi – với một tốc độ chưa từng có, Cuộc sống sau đại học của Jeffrey Selingo đã đưa ra một bản đồ hành trình cho những sinh viên tốt nghiệp đang phải đối mặt với việc định vị một địa hình nhiều thử thách và không thể dự báo trước.” _ Martin Ford, tác giả của Sự nổi dậy của rô-bốt: Công nghệ và sự đe dọa của một tương lai không có nghề nghiệp.',
            'avatar' => 'khoi_nghiep_12.jpg',
            'pro_att_id' => 'Kỹ năng, Khởi nghiệp, Kỹ năng làm việc',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 60.000,
            'author' => 'Jeffrey J. Selingo',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Cuộc chơi khởi nghiệp',
            'description' => 'Đây là bản tóm tắt của sách Cuộc chơi khởi nghiệp. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Đầu tư mạo hiểm đã không còn là một thuật ngữ quá mới mẻ ở Việt Nam trong vòng một thập kỷ qua, khi hàng loạt các công ty khởi nghiệp đã được các nhà đầu tư mạo hiểm rót vốn thành công, tạo nên những tên tuổi lớn trong ngành công nghệ và truyền thông như VNG, VCcorp, Vatgia, Goldsun Focus Media, hay YanTV. Tuy nhiên, điều vẫn còn bí ẩn với rất nhiều doanh nhân có lẽ là câu hỏi: Các nhà đầu tư mạo hiểm suy nghĩ và ra quyết định như thế nào, hay nói cách khác là làm thế nào để một công ty khởi nghiệp lọt được vào mắt xanh của những nhà đầu tư đầy kinh nghiệm?
            “Cuộc chơi khởi nghiệp” (The Start-up Game) của William H. Draper III (Bill Draper) cho ta những câu trả lời sâu sắc cho những điều doanh nhân khởi nghiệp quan tâm, và thực tế là, cuốn sách đã cho người đọc nhiều hơn thế.',
            'avatar' => 'khoi_nghiep_13.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 30.000,
            'author' => 'Jeffrey J. Selingo',
            'pro_pub_id' => 'NXB Đại Học Kinh Tế Quốc Dân',
            'sale' => '40%'
        ]);
        Product::create([
            'name' => 'Tư duy khởi nghiệp',
            'description' => 'Gần 70% người ở độ tuổi 20 nói rằng họ muốn tự kinh doanh. Nhưng thực tế, chỉ có một phần mười trong số đó có thể khởi nghiệp thành công, và chín phần mười còn lại thì làm thuê cho thiểu số ít ỏi kia. Những người có thể tự mình thành lập công ty riêng là một nhóm người cực kỳ đặc biệt.
            Joel Comm và John Rampton đã tìm ra được những điều tạo nên khác biệt giữa người khởi nghiệp thành công và người cả đời an phận làm thuê. Trong cuốn sách “Tư duy khởi nghiệp”, bộ đôi tác giả đã nhanh chóng chỉ ra: Những người có thể thành lập công ty của riêng mình luôn biết chắc chắn họ muốn làm gì, và họ sở hữu tham vọng khác hẳn người bình thường. Họ có thể có một công việc tốt, được trả lương cao, có tiềm năng thăng tiến... nhưng như thế vẫn chưa đủ. Chừng nào họ còn đang làm việc cho người khác, phải trợ giúp người khác hoàn thiện ước mơ thay vì theo đuổi ước mơ của chính họ..., thì họ sẽ không được hạnh phúc.
            Chính vì vậy, hai tác giả đã đánh giá 50 đặc điểm mà một cá nhân cần có để xây dựng doanh nghiệp thành công. Họ mô tả cuộc sống cũng như tính cách của một doanh nhân, đồng thời cho tất cả chúng ta thấy những điều cần thiết để biến một ý tưởng thành một doanh nghiệp, và cách biến ước mơ của doanh nhân trở thành hiện thực.
            Quyết định lập công ty riêng có thể rất đáng sợ. Nhưng nếu bạn thực sự quyết tâm với mục tiêu của mình, thì hãy bắt đầu bằng việc đọc cuốn sách này. Hãy hiểu rõ những điều cần thiết để trở thành một người kiến tạo doanh nghiệp, trở thành một doanh nhân và toàn quyền làm chủ bản thân mình. Sau đó, bạn sẽ sẵn sàng để đưa ra quyết định quan trọng nhất cuộc đời.',
            'avatar' => 'khoi_nghiep_14.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 30.000,
            'author' => 'Joel Comm, John Rampton',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '45%'
        ]);
        Product::create([
            'name' => 'Sổ tay khởi nghiệp',
            'description' => 'Khởi nghiệp không hẳn là một nghề, mà là sứ mệnh với đam mê. Vì lẽ đó, hãy để khát khao luôn bùng cháy, để viễn kiến dẫn đường – dù những năm tháng đầu đời của doanh nghiệp, theo quy luật, luôn là giai đoạn nhiều thách thức nhất. 
            Thành công không thể đến từ những “bí kíp” có được trong vài cuốn sách, vì nếu đúng vậy thì sẽ không có nhiều doanh nghiệp thất bại… 
            Cuốn “Sổ tay khởi nghiệp” cũng thế, tự thân nó không thể giúp bạn thành công hơn nhưng nó có thể góp phần giúp bạn hạn chế những thiếu sót, những sai lầm có thể thấy trước.',
            'avatar' => 'khoi_nghiep_15.jpg',
            'pro_att_id' => 'Khởi nghiệp',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 30.000,
            'author' => 'Nhiều tác giả',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '50%'
        ]);
        Product::create([
            'name' => 'Tôi biết ơn và tôi giàu có',
            'description' => 'Tôi biết ơn và tôi giàu có là cuốn sách dành cho bất cứ ai quan tâm đến việc tìm kiếm, bắt sóng và kết nối với nguồn năng lượng huyền vi và vô tận của Vũ trụ. Cuốn sách này còn cho độc giả biết thêm nhiều khía cạnh mới mẻ về sự sung túc và viên mãn cũng như cách thức để phát triển nguồn vốn sáng tạo, vốn xã hội, vốn tinh thần và rất, rất nhiều tài sản tinh thần quý giá khác trong đời bạn.
            Chúng ta ở đây vào thời điểm đặc biệt này trên Trái Đất là để mở mang vũ trụ chứ không phải để chiến thắng một giải thưởng hàn lâm nào cả. Chúng ta không phải dùng tài năng của mình để vượt lên và đánh bại bất kỳ ai, cũng không phải để chịu đựng những đau khổ hay giằng xé niềm tin vinh quang rồi sẽ đến sau cơn bĩ cực.',
            'avatar' => 'khoi_nghiep_16.jpg',
            'pro_att_id' => 'Kỹ năng, Khởi nghiệp, Kỹ năng sống',
            'pro_cate_id' => 'Kinh doanh',
            'price' => 35.000,
            'author' => 'Pam Grout',
            'pro_pub_id' => 'NXB Tổng hợp thành phố HCM',
            'sale' => '50%'
        ]);
        Product::create([
            'name' => 'Hướng nghiệp trong thời đại 4.0',
            'description' => 'Tôi biết ơn và tôi giàu có là cuốn sách dành cho bất cứ ai quan tâm đến việc tìm kiếm, bắt sóng và kết nối với nguồn năng lượng huyền vi và vô tận của Vũ trụ. Cuốn sách này còn cho độc giả biết thêm nhiều khía cạnh mới mẻ về sự sung túc và viên mãn cũng như cách thức để phát triển nguồn vốn sáng tạo, vốn xã hội, vốn tinh thần và rất, rất nhiều tài sản tinh thần quý giá khác trong đời bạn.
            Chúng ta ở đây vào thời điểm đặc biệt này trên Trái Đất là để mở mang vũ trụ chứ không phải để chiến thắng một giải thưởng hàn lâm nào cả. Chúng ta không phải dùng tài năng của mình để vượt lên và đánh bại bất kỳ ai, cũng không phải để chịu đựng những đau khổ hay giằng xé niềm tin vinh quang rồi sẽ đến sau cơn bĩ cực.',
            'avatar' => 'huong_nghiep_1.jpg',
            'pro_att_id' => 'Hướng nghiệp, Khởi nghiệp, Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Pam Grout',
            'pro_pub_id' => 'NXB Tổng hợp thành phố HCM',
            'sale' => '50%'
        ]);
        Product::create([
            'name' => 'Cẩm nang chọn nghề',
            'description' => 'Bạn là sinh viên mới ra trường?
            Bạn đã gắn bó với một công việc hàng chục năm nhưng giờ đây, bạn nhận ra đó không phải là công việc bạn thực sự đam mê?
            Bạn đã quá chán ngán với cảnh đi làm thuê cho người khác?
            Trong một xã hội đầy biến động với quá nhiều cơ hội việc làm nhưng cũng không thiếu những cá nhân tài năng như ngày nay, bạn phải làm gì để trở nên thực sự khác biệt và tìm được cho mình một công việc như ý?
            Hãy đi tìm câu trả lời cho những câu hỏi trên bằng cách áp dụng 7 bước được Jeff Goins đưa ra trong Cẩm nang chọn nghề. Cuốn sách đơn giản và dễ hiểu này được thiết kế giống như một cuộc hành trình đi tìm "tiếng gọi sự nghiệp" đích thực của bản thân. Mỗi bước đường giống như một trạm dừng chân, mà tại đó bạn sẽ có được những hướng dẫn cụ thể hơn nhằm giúp bạn sớm thu được những trái ngọt ở cuối hành trình.',
            'avatar' => 'huong_nghiep_2.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Jeff Goins',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Đến Starbucks mua cà phê cốc lớn',
            'description' => 'Đây là bản tóm tắt của sách Đến Starbucks mua cà phê cốc lớn. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Đến Starbucks, bạn sẽ gọi cà phê cỡ lớn hay nhỏ?
            Khi đi xem phim, bạn sẽ mua bịch bắp rang bơ cỡ to hay cỡ nhỏ?
            Lúc cần mua trà giải khát, bạn sẽ đến siêu thị cách xa hay đến tiệm tạp hóa cạnh nhà?
            Những vấn đề này có lẽ bạn sẽ cảm thấy thật vụn vặt và chẳng đáng quan tâm, nhưng tác giả đã thông qua việc phân tích những ví dụ đời thường nhất trong cuộc sống hàng ngày để nói với chúng ta rằng: ngoài việc cố gắng kiếm thật nhiều tiền, thì tiêu tiền một cách thông minh cũng chính là tuyệt chiêu tốt nhất để ứng phó với tình trạng lạm phát đang tràn lan hiện nay.
            Vậy nên để tiết kiệm, chúng ta hãy bắt đầu từ việc học cách tính toán và quản lý chi phí một cách thấu đáo từ hôm nay. Chỉ như vậy, chúng ta mới có thể trở thành NGƯỜI TIÊU DÙNG SÁNG SUỐT.',
            'avatar' => 'huong_nghiep_3.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Yoshimoto Yoshio',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Thật đơn giản - Phỏng vấn tuyển dụng',
            'description' => 'Đây là bản tóm tắt của sách Thật đơn giản - Phỏng vấn tuyển dụng. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Nhà tuyển dụng thật sự muốn gì ở bạn?
            Nhà tuyển dụng dựa vào các tiêu chí nào để đánh giá ứng viên?
            Vì sao nhà tuyển dụng lại quyết định chọn ứng viên này chứ không phải rất nhiều ứng viên sáng giá khác?
            Bạn phải làm gì để được tuyển dụng?
            Bạn sẽ:
            Học được cách thể hiện mình tốt nhất
            Hiểu được điều gì gây ấn tượng với nhà tuyển dụng nhất
            Thể hiện sự nổi trội của mình trong suốt quá trình trước, trong và sau cuộc phỏng vấn
            Với rất nhiều lời khuyên từ chuyên gia, các ví dụ sinh động, các câu chuyện thực tế, các câu hỏi và mẹo thú vị, Thật đơn giản - Phỏng vấn tuyển dụng sẽ cung cấp mọi kiến thức và bài tập thực hành mà bạn cần để thành công và gây ấn tượng với các nhà tuyển dụng.',
            'avatar' => 'huong_nghiep_4.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Ros Jay',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => 'Sống ở thế chủ động',
            'description' => 'Người ta đánh giá chỉ số IQ hay EQ không quan trọng bằng chỉ số AQ (chỉ số vượt khó). Vượt khó chính là một thái độ sống tích cực. Như vậy, trí thông minh hay cảm xúc không quyết định sự thành bại trong cuộc đời bạn, mà cả thái độ sống. Có thái độ tích cực, vạn sự sẽ thành. Mang thái độ tiêu cực, muôn sự sẽ bại.
            Sống ở thể chủ động tập hợp những bài viết và tâm huyết của tác giả Nguyễn Tuấn Quỳnh – một người chia sẻ, truyền cảm hứng, một người đi, một người viết và đồng thời cũng là một doanh nhân. 
            Cuốn sách này phản ánh suy nghĩ, những trăn trở, chia sẻ của tác giả với thế hệ trẻ thông qua những chuyến đi thú vị đến các nước trên thế giới và công việc kinh doanh mà tác giả yêu thích. Với tác giả, hành trình cuộc đời của con người chính là khám phá những năng lực và khả năng của bản thân. Sống ở thể chủ động sẽ giúp bạn nhận ra, khi bạn có những ước mơ cháy bỏng, chúng sẽ thôi thúc bạn hăm hở bắt tay thực hiện, bạn sẽ tạo ra được một cuộc sống thú vị và có giá trị.',
            'avatar' => 'huong_nghiep_5.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Nguyễn Tuấn Quỳnh',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '45%'
        ]);
        Product::create([
            'name' => 'Một góc thế giới, bốn bề đại dương',
            'description' => 'Một góc thế giới, bốn bề đại dương là cuốn cẩm nang cung cấp những thông tin bổ ích, cần thiết để bạn có sự chuẩn bị tốt nhất cho hành trình du học đến Australia. Vương Thục Nhi – tác giả cuốn sách hiện đã sống và học tập tại Australia hơn 7 năm.
            Sách cung cấp thông tin chi tiết về nền giáo dục Australia bao gồm các bậc học, chương trình, cách tính điểm, các loại học bổng,… Ngoài ra, còn các thông tin về hình thức sinh hoạt, điều kiện chỗ ăn và phương tiện di chuyển, các hình thức làm việc và thủ tục để định cư tại Australia. Cuốn sách này có thể được xem như cuốn từ điển mini về du học Australia.
            Ngoài ra, tác giả cũng chia sẻ ít nhiều về kinh nghiệm học tập cũng như cuộc sống tại Australia. Qua đó hy vọng bạn đọc sẽ có những hình dung tổng quát về con đường du học và những vấn đề có thể gặp phải tại Australia, từ đó có sự lựa chọn phù hợp cho tương lai.
            Tiếng Anh có từ vựng tinh tế là serendity dùng để chỉ cơ duyên, những điều may mắn và tốt đẹp mà bạn tình cờ gặp, và việc bạn vô tình đặt tay lên cuốn sách này có lẽ cũng là một serendity.',
            'avatar' => 'huong_nghiep_6.jpg',
            'pro_att_id' => 'Hướng nghiệp, Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Vương Thục Nhi',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '45%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Cẩm nang chọn nghề',
            'description' => 'Đây là bản tóm tắt của sách Cẩm nang chọn nghề. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Bạn là sinh viên mới ra trường?
            Bạn đã gắn bó với một công việc hàng chục năm nhưng giờ đây, bạn nhận ra đó không phải là công việc bạn thực sự đam mê?
            Bạn đã quá chán ngán với cảnh đi làm thuê cho người khác?
            Trong một xã hội đầy biến động với quá nhiều cơ hội việc làm nhưng cũng không thiếu những cá nhân tài năng như ngày nay, bạn phải làm gì để trở nên thực sự khác biệt và tìm được cho mình một công việc như ý?
            Hãy đi tìm câu trả lời cho những câu hỏi trên bằng cách áp dụng 7 bước được Jeff Goins đưa ra trong Cẩm nang chọn nghề. Cuốn sách đơn giản và dễ hiểu này được thiết kế giống như một cuộc hành trình đi tìm "tiếng gọi sự nghiệp" đích thực của bản thân. Mỗi bước đường giống như một trạm dừng chân, mà tại đó bạn sẽ có được những hướng dẫn cụ thể hơn nhằm giúp bạn sớm thu được những trái ngọt ở cuối hành trình.',
            'avatar' => 'huong_nghiep_7.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Jeff Goins',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '50%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Tuổi 20 - Những năm tháng quyết định cuộc đời bạn',
            'description' => 'Đây là bản tóm tắt của sách Tuổi 20 - Những năm tháng quyết định cuộc đời bạn. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Luôn chạy theo đám đông Không tiếp sức, cổ vũ những người xung quanh
            Nghĩ rằng không phải học hỏi và trưởng thành nữa
            Nghĩ rằng giúp đỡ ai đó rồi họ sẽ có ngày trả ơn mình
            Đầu tư vào những mối quan hệ không có giá trị đúng đắn
            Cặp kè với những người bạn ăn chơi lêu lổng và giết thời gian
            Luôn tiêu đến đồng cuối cùng mình có được mà không chịu để dành
            Hẹn hò một người chẳng ra gì
            Quên rằng luật nhân quả là có thật trong cuộc sống
            Tuổi thanh xuân giống như một cơn mưa rào mùa hạ chợt đến và rồi chợt đi lúc nào không hay. Đừng bỏ phí những năm tháng quyết định cuộc đời mình các bạn nhé!
            Waka xin trân trọng giới thiệu sách [Tóm tắt sách] Tuổi 20 - Những năm tháng quyết định cuộc đời bạn - Meg Jay!',
            'avatar' => 'huong_nghiep_8.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Meg Jay',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '50%'
        ]);
        Product::create([
            'name' => 'Sức mạnh của thói quen',
            'description' => 'Về cơ bản, người lớn và trẻ em không khác nhau là mấy. Bởi hầu hết những hành động hàng ngày của chúng ta đều là sản phẩm của thói quen vô thức. Thế nhưng không phải cá nhân, tổ chức nào cũng có được thành công. Đó  là vì mỗi người có những thói quen riêng. Vậy thói quen nào mới giúp bạn thành công? Trong cuốn sách Sức mạnh của thói quen, Charles Duhigg sẽ giải đáp thắc mắc ấy.
            Chìa khoá quan trọng nhất để mở cánh cửa thành công chính là sự kết hợp nhuần nhuyễn những thói quen tốt với nhau. Câu hỏi đặt ra là làm thế nào để phân biệt thói quen tốt và thói quen xấu? Thói quen có nằm trong tầm kiểm soát của chúng ta hay không? Với ba phần khá đầy đặn, Sức mạnh của thói quen cho bạn cái nhìn toàn diện không chỉ về thói quen cá nhân, của tổ chức mà còn là của toàn xã hội, cùng với lời khuyên để vận dụng các thói quen đó. Muốn thay đổi thói quen, bạn phải phá vỡ những việc làm tuỳ hứng hàng ngày – câu “thần chú” này chỉ đường cho bạn tới thành công.
            Sức mạnh của thói quen sẽ làm bạn say mê bởi những ý tưởng thú vị, những nghiên cứu ấn tượng, những phân tích thông minh và những lời khuyên thiết thực. Những độc giả đưa cuốn sách này vào danh sách bestseller của Thời báo New York suốt 40 tuần đã kiểm chứng điều đó. Và dưới đây, Alpha Books cũng xin chích đăng một vài bình luận về cuốn sách:
            “Một thăm dò thú vụ về những thói quen bệnh hoạn của chúng ta – chúng ta hút thuốc, chúng ta không ngừng kiểm tra điện thoại, liên tục chọn lựa người tình tồi, chúng ta thường xuyên (hoặc không bao giờ) thu dọn phòng ốc. Duhigg đào sâu vào tìm ra nguyên do tại sao chúng ta làm như vậy, và chúng ta có thể thay đổi chúng ra sao, với cả cá nhân và tổ chức” – The Daily
            “Cuốn sách của Charles Duhigg đầy sức mạnh trong chính sự giản dị của nó: đối đầu với những yếu tố gốc rễ trong hành vi con người, chấp nhận chúng như những căn bệnh thâm căn cố đế, rồi sau đó hướng người đọc tới khát khao đổi thay. Cái nhìn của anh thật sâu sắc, hữu ích và cũng đầy khiêu khích” – Jim Collins, tác giả những cuốn sách kinh doanh Good to Great (Từ tốt đến vĩ đại) và Built to Last (Xây dựng để trường tồn) bán chạy nhất thế giới.',
            'avatar' => 'huong_nghiep_9.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Charles Duhigg',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '50%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Chọn nghề theo tính cách',
            'description' => 'Đây là bản tóm tắt của sách Chọn nghề theo tính cách. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Chọn Nghề Theo Tính Cách (Tái Bản 2017) là quyển sách gần gũi, dễ đọc, vừa theo dạng câu chuyện vừa theo dạng một cẩm nang hướng dẫn; sẽ cung cấp cho bạn cách thức chọn nghề hữu hiệu nhằm giúp bạn tìm được nghề nghiệp phù hợp nhất với bản thân mình.
            Chọn nghề là nhiệm vụ quan trọng đầu tiên mà các bạn trẻ cần làm trước khi rời ghế nhà trường phổ thông để vào học đại học hay cao đẳng. Có khá nhiều cách tiếp cận hay phương pháp để chọn lựa nghề nghiệp cho bản thân nhưng những lý giải đằng sau các phương pháp đó có thể dài dòng và khó hiểu. Khi soạn cuốn sách này, chúng tôi cân nhắc thấy nếu cung cấp quá nhiều kiến thức, bạn sẽ nhàm chán và thấy nhiều điều không phù hợp, do đó, chúng tôi cố gắng soạn ra một cuốn sách gần gũi, dễ đọc, vừa theo dạng câu chuyện vừa theo dạng một cẩm nang hướng dẫn. Mục tiêu là cung cấp cho bạn cách thức chọn nghề hữu hiệu nhằm giúp bạn tìm được nghề nghiệp phù hợp nhất với bản thân mình.
            Hãy dành chút thời gian đọc phần hướng dẫn sử dụng này trước khi đi sâu hơn vào những phần sau. Để đạt được mục tiêu của cuốn sách, sẽ có những phần bạn cần đọc hiểu và có những phần khác bạn phải bỏ chút công sức ra suy nghĩ và hoàn thành. Bạn không phải đọc toàn bộ cuốn sách này, bạn chỉ cần đọc những phần chính) và hoàn thành những nội dung được yêu cầu, chỉ cần như thế, tin là bạn đã đạt được mục tiêu định hướng nghề nghiệp cho bản thân rồi.',
            'avatar' => 'huong_nghiep_10.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Alpha Book biên soạn',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '55%'
        ]);
        Product::create([
            'name' => 'Thay đổi suy nghĩ, thay đổi cuộc đời',
            'description' => 'Nếu bạn sẵn sàng thúc đẩy bản thân hướng đến sự vĩ đại và đạt được những kết quả to lớn, bạn đã có trong tay tấm bản đồ đi đúng đường hoặc bạn có bạn trai tuyệt vời. Tất cả những gì bạn cần làm để tạo ra một tương lai tuyệt vời cho bản thân là hãy đọc cuốn sách này, nó quyết định cách bạn sẽ áp dụng cho cuộc đời bạn, viết ra một kế hoạch và sau đó kích thích lòng nhiệt huyết để thực hiện nó.
            “Thay đổi suy nghĩ, thay đổi cuộc đời ”chỉ cho bạn cách khám phá những khả năng tiềm ẩn của bạn, mọi người và tác động vào những nguồn lực bạn cần để đạt được bất kỳ thành công nào mà bạn đặt ra cho bản thân.
            Bạn sẽ hoàn toàn ngạc nhiên về bản thân khi bạn bắt đầu đạt được những thành công mới và tốt hơn bằng cách sử dụng những khái niệm và ý tưởng này trong mọi việc bạn làm. Đây là những khái niệm được sử dụng bởi tất cả những người chiến thắng, những nhà triệu phú và những người đi đầu trong mọi lĩnh vực.
            Cuốn sách này giúp sẽ bạn học được quá trình đi từng bước một để đạt được thành công lớn mà thực sự bạn sẽ làm được, một cách dễ dàng và hiệu quả. Chiến lược hướng đến thành công rất logic, lôi cuốn và đặc biệt rất phù hợp và có lợi mà nó thực sự là một phát minh trong sự thể hiện cá nhân.
            Khi bạn nghĩ, tại sao không nghĩ những suy nghĩ vĩ đại và đạt được những thành công vĩ đại?
            Hãy sẵn sàng cho một trong những cuộc phiêu lưu và những cuộc thám hiểm vĩ đại trên mặt trận vĩ đại mà đầu tiên chính là suy nghĩ của bạn! Bạn sẽ có một kinh nghiệm tuyệt vời.',
            'avatar' => 'huong_nghiep_11.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Đức Minh',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '65%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Cách tư duy khác về thành công',
            'description' => 'Đây là bản tóm tắt của sách Cách Tư Duy Khác Về Thành Công. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Tóm tắt cuốn sách "Cách Tư Duy Khác Về Thành Công": Vua Solomon của người Israel cổ đại, vị vua nổi tiếng thông thái và giàu có từng nói: "Những ai ham thích tiền bạc sẽ không bao giờ cảm thấy đủ, và ai khao khát sự giàu có sẽ không bao giờ thấy thỏa mãn với những gì mình kiếm được". Tài sản, quyền lực, tham vọng,.. tất cả đều không phải là thước đo thật sự của thành công. Vậy thành công đích thực là gì?
            Trong cuốn sách này, tác giả John C.Maxwell sẽ chia sẻ với chúng ta cách tư duy khác biệt về thành công. Để đến đích cuối cùng, bạn phải chuẩn bị hành trang đầy đủ, vượt qua những trở ngại, và đừng đi một mình, hãy để gia đình, những người bạn đồng hành sát cánh cùng bạn trong suốt hành trình.
            Chìa khóa thành công hoàn toàn trong tầm tay bạn, đó là:
            Xác định rõ ràng mục đích cuộc sống
            Phát triển tối đa tiềm năng của bản thân
            Giúp mọi người cùng tỏa sáng
            Các tư duy khác về thành công chính là tấm bản đồ tuyệt vời giúp bạn chu du qua miền đất thành công, luôn tiến lên phía trước, sống cuộc đợi mơ ước và không ngừng hoàn thiện.',
            'avatar' => 'huong_nghiep_12.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'John C. Maxwell',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '65%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Du học trên đất Mỹ',
            'description' => 'Đây là bản tóm tắt của sách Du học trên đất Mỹ. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Tạm biệt Trung Quốc, Vương Quyên sang Mỹ du học. Chặng đường hòa nhập đầy gian nan, vất vả, nhiều lúc khiến cô muốn từ bỏ. Nó không hề giống với phim ảnh hay những tưởng tượng trước kia của cô và mọi người. Cô đã phải nếm trải đủ mọi cảm xúc: tuyệt vọng, ân hận, nuối tiếc… Nhưng cùng với nghị lực của mình, cô đã vượt qua được tất cả, tích lũy được rất nhiều kinh nghiệm trong nhiều lĩnh vực, và cuối cùng cũng đạt được niềm mơ ước bấy lâu của mình.
            Cuốn sách này dành cho:
            Những ai sắp hoặc ước mơ tương lai sẽ bước trên con đường du học.
            Những du học sinh đang chiến đấu một mình để thực hiện ước mơ.
            Những người trẻ tuổi sắp hoặc vừa mới bước chân vào xã hội, cũng như những ai đang một mình vật lộn thực hiện ước mơ nơi đất khách quê người.',
            'avatar' => 'huong_nghiep_13.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Vương Quyên',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Hộ chiếu xanh: Hành trang của những công dân toàn cầu - Hành trình ra biển lớn',
            'description' => 'Đây là bản tóm tắt của sách Hộ chiếu xanh:  Hành trang của những công dân toàn cầu - Hành trình ra biển lớn. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Sau thành công của cuốn sách Hộ Chiếu Xanh đi quanh thế giới: Những bước để trở thành công dân toàn cầu, Hộ Chiếu Xanh đã quay trở lại với một phiên bản mới trẻ trung, sinh động và nhiều thông tin bổ ích.
            Tiếp tục sứ mệnh truyền cảm hứng cho người Việt trẻ vươn mình ra thế giới, cuốn sách Hộ Chiếu Xanh: Hành trang của những công dân toàn cầu – Hành trình ra biển lớn là cuốn cẩm nang thiết thực dành cho những bạn đang có dự định và chuẩn bị đi du học. Cuốn sách gồm 4 phần chính: Tiếng gọi ra khơi – Chuẩn bị hành trang – Vượt sóng cả – Chinh phục đại dương. Mỗi phần bao gồm những kỹ năng mà các bạn trẻ cần chuẩn bị để chuyến hành trình tương lai được suôn sẻ, hạn chế những “rủi ro” không đáng có.
            Được viết bởi các bạn trẻ người Việt và nước ngoài, cuốn sách đa dạng về nội dung và bao quát được nhiều khía cạnh, giúp bạn có góc nhìn đa chiều về việc chuẩn bị hành trang hòa nhập với môi trường mới, con người mới.
            Đặc biệt trong cuốn sách bạn có thể bắt gặp những “công dân Việt toàn cầu” như: Trần Hùng John, Huyền Chip, Trần Thị Thùy Trang, Hồ Thu Hương, Chu Đình Tới… Họ sẽ chia sẻ về hành trình vươn ra biển lớn của mình, những vấp ngã, những điều họ học được sau mỗi hành trình.
            Hộ chiếu xanh:  Hành trang của những công dân toàn cầu - Hành trình ra biển lớn là hành trang bạn không thể thiếu trong chiếc va li của mình.
            Waka xin trân trọng giới thiệu sách [Tóm tắt sách] Hộ chiếu xanh:  Hành trang của những công dân toàn cầu - Hành trình ra biển lớn.',
            'avatar' => 'huong_nghiep_14.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Nhiều tác giả',
            'pro_pub_id' => 'NXB Thanh Niên',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Trọn nghề, vẹn nghiệp',
            'description' => 'Đây là bản tóm tắt của sách Trọn nghề, vẹn nghiệp. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Trong Trọn nghề, vẹn nghiệp, hai tác giả Stephen R. Covey và Jennifer Colosimo đã mang đến chúng ta vô vàn cơ hội từ nền kinh tế “kiến thức” đối với những ai đang bươn chải với nghề nghiệp của mình. Họ đã liệt kê những phương pháp giúp con người thay đổi cách suy nghĩ và hành động đối với sự nghiệp, và nâng cấp sự nghiệp bản thân từ tầm vóc xoàng xĩnh lên một tầm cao mới. Covey và Colosimo đã lý giải làm thế nào những công cụ phong phú và phù hợp nhất có thể được vận dụng nhằm khẳng định sức mạnh và niềm đam mê của mỗi người. Những công cụ này chính là bảo bối giúp mỗi cá nhân vạch ra con đường sự nghiệp họ nên theo đuổi, và phương pháp giúp họ tận hưởng thành công mĩ mãn từ vị trí trong hiện tại và tương lai của họ.',
            'avatar' => 'huong_nghiep_15.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Stephen R. Covey, Jennifer Colosimo',
            'pro_pub_id' => 'Đang cập nhật',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Nghề nào cho bạn nghề nào cho tôi',
            'description' => 'Đây là bản tóm tắt của sách Nghề nào cho bạn nghề nào cho tôi. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Tóm tắt cuốn sách "Nghề Nào Cho Bạn Nghề Nào Cho Tôi": "Với hàng nghìn người Mỹ, kiệt tác dài 276 trang của Shoya Zichy, cuốn Nghề Nào Cho Bạn Nghề Nào Cho Tôi đã cùng lúc chấm dứt bóng ma khiếp đảm của nạn thất nghiệp và làm thoả mãn những người đang buồn rầu trước sự biến đổi phức tạp của nền kinh tế quốc gia và thế giới..."
            Tính cách phản ánh hành động tưởng như là chuyện bình thường, nhưng thực tế, hầu hết mọi người đều không có được công việc thực sự phù hợp với tính cách của họ. Career Match sẽ cùng bạn thực hiện bài tự kiểm tra đơn giản trong 10 phút để xác định kiểu tính cách cụ thể của bạn, từ đó giúp bạn:
            Xác định được các loại công việc sẽ gây hứng thú và đem lại niềm vui cho bạn
            Xác định ông chủ phù hợp và môi trường làm việc bạn cần phát triển
            Xác nhận tính đúng đắn của con đường bạn đang đi hoặc giúp bạn tìm thấy một hướng mới tốt hơn.
            Nếu công việc bạn đang làm không khiến bạn thấy thực sự hồ hởi và say mê, thì đã đến lúc bạn nên nghĩ đến một nghề khác. Hãy đọc kỹ cuốn sách, bạn sẽ thấy những lời giải thích hợp lý về lựa chọn nghề nghiệp và những câu chuyện có thật về những người đã thực sự cảm thấy hài lòng vì công việc phù hợp với tính cách của họ, và họ đã gặt hái được nhiều thành công với nghề nghiệp đó.',
            'avatar' => 'huong_nghiep_16.jpg',
            'pro_att_id' => 'Hướng nghiệp',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Shoya Zichy - Ann Bidou',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => '17 tố chất thiết yếu của team player',
            'description' => 'Bạn không thể xây dựng được một đội ngũ tuyệt vời nếu không có những thành viên tuyệt vời. Đó chính là câu nói trong lời mở đầu của quyển sách 17 tố chất thiết yếu của team player của tác giả John C. Maxwell. Vậy làm thế nào để bạn có được những người đồng đội tốt trong đội ngũ của mình? Bạn thật sự chỉ có hai lựa chọn: huấn luyện họ hoặc chiêu mộ họ. Bạn phát triển những thành viên đã có để họ trở thành những nhà vô địch, hoặc bạn ra ngoài tìm kiếm những người có khả năng vô địch và mang họ về đội ngũ của mình. Cuốn sách này sẽ giúp bạn thực hiện cả hai việc ấy.
            Đi sâu vào từng vấn đề Maxwell đã trình bày, phân tích rõ ràng từng mắt xích về các đặc điểm cá nhân cần thiết để trở thành một cầu thủ nhóm hiệu quả. Những mô tả chi tiết cùng những ví dụ trong mỗi câu chuyện giúp bạn có thể áp dụng cho dù bạn ở vai trò lãnh đạo, ở nhà, trong công việc, tại nhà thờ hay trên sân bóng…
            Ngoài 17 tố chất cần thiết này Maxwell còn cho thấy nhiều tố chất khác, tác động đến nhóm và thành công của nó như thế nào. 17 tố chất thiết yếu của team player không làm bạn cảm thấy nhàm chán, khó hiểu mà là những hành động cụ thể được trình bày để cải thiện giá trị của mỗi người chơi trong đội.
            Cuốn sách giúp các đồng đội trở thành những người đóng góp tốt hơn cho đội ngũ – dù tài năng của họ ở mức nào. Nếu bạn mong muốn tuyển những người mới từ bên ngoài vào, cuốn sách này sẽ hướng dẫn bạn tìm ra những thành viên nào có thể giúp cho đội ngũ của bạn vượt lên hàng đầu. Và bạn có thể tin rằng những ai thể hiện được 17 tố chất được đề cập trong cuốn sách này đều sẽ là những đồng đội tuyệt vời. Hãy đọc từng chương một, tiêu hóa chúng. Sử dụng phần “ghi nhớ” để giúp bạn hiểu thấu từng điểm một. Bằng việc nắm vững quy trình, bạn có thể trở thành người mà mọi đội ngũ đều muốn có.',
            'avatar' => 'ky_nang_lam_viec_1.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'John C. Maxwell',
            'pro_pub_id' => 'NXB Tổng hợp thành phố HCM',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Lập kế hoạch tổ chức sự kiện chuyên nghiệp',
            'description' => 'Sự kiện là phương tiện truyền đạt mạnh mẽ nhất để thúc đẩy mọi người cải thiện những khía cạnh quan trọng nhất trong cuộc đời họ.
            Cuốn sách cung cấp góc nhìn mới đầy sâu sắc, đồng thời thay đổi cách bạn làm việc để giúp bạn nâng tầm những trải nghiệm của khán giả. Bạn sẽ trở thành một nhà tổ chức sự kiện có chiến lược và có tầm ảnh hưởng mạnh mẽ hơn.',
            'avatar' => 'ky_nang_lam_viec_2.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Andrea Driessen',
            'pro_pub_id' => 'NXB Dân Trí',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Brian Tracy - Bậc thầy về tư duy thành công',
            'description' => 'Ngày nay, thế giới liên tục thay đổi vì thế bạn phải nhạy bén cùng với một khối óc thông minh để tiến lên phía trước. Đa số những người bình thường chỉ sử dụng khoảng 2% khả năng trí tuệ của họ.
            Làm thế nào để chúng ta có thể học cách khai thác tiềm năng của não để tối đa hóa cơ hội giống như những người thành công hay làm? Brian Tracy – Bậc thầy về tư duy thành công sẽ giúp bạn:
            Thúc đẩy khả năng sáng tạo
            Khai thác cơ hội trong mọi tình huống
            Loại bỏ nhưng yếu tố tiêu cực
            Lập kế hoạch hành động hiệu quả
            Cách thức đạt mục tiêu chính xác và tốc độ
            Cuốn sách này hé mở những phương pháp đơn giản và đã được chứng minh hiệu quả để giúp khai thác tài năng và khả năng tư duy tự nhiên nhằm đạt được những mục tiêu đặt ra và hiện thực hóa những lý tưởng của riêng mình.
            Dù bạn muốn tăng doanh số bán hàng, thúc đẩy khả năng sáng tạo hay tạo ra những thay đổi tốt hơn trong cuộc sống. Cuốn sách này sẽ giúp bạn nắm được những nguồn lực tinh thần mạnh mẽ. ',
            'avatar' => 'ky_nang_lam_viec_3.jpg',
            'pro_att_id' => 'Kỹ năng làm việc, Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Brian Tracy',
            'pro_pub_id' => 'NXB Đại Học Kinh Tế Quốc Dân',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Kỷ luật tự giác - Thói quen của thành công',
            'description' => 'Mục tiêu tuyệt vời nào bạn nghĩ đến nếu biết mình không thể thất bại? Suy cho cùng thì mọi thất bại trong cuộc sống đều xuất phát từ nỗi sợ và sự nghi ngờ vào chính năng lực của bản thân.
            Vậy nên, muốn thành công không còn cách nào khác ngoài việc đập tan nỗi sợ. Bằng việc tạo ra niềm tin vô hạn vào khả năng của chính mình, đồng thời xây dựng kỷ luật thép cho bản thân, bạn có thể dễ dàng chinh phục những mục tiêu trước nay bạn chưa từng nghĩ tới. Bạn sẽ sẵn sàng làm bất cứ thứ gì để cuộc sống của mình trở nên tốt đẹp hơn. Chính bạn sẽ định nghĩa cuộc đời của mình chứ không phải một ai khác. Mức độ tự tin và kỷ luật càng lớn, năng lượng và sự quyết tâm thực hiện mục tiêu càng cao.
            Trong cuốn “Kỷ luật tự giác - thói quen của người thành công”, tác giả Brian Tracy – “ông vua bán hàng”, nhà huấn luyện bậc thầy và là tác giả của một loạt những cuốn sách kinh doanh kinh điển trên toàn thế giới - đã trải ra một lộ trình với những bước đi hết sức cụ thể để giúp bạn vươn tới thành công.',
            'avatar' => 'ky_nang_lam_viec_4.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Brian Tracy',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '60%'
        ]);
        Product::create([
            'name' => 'Cẩm nang tư vấn bảo hiểm cho người mới bắt đầu',
            'description' => 'Trong từ điển Hán ngữ, ý nghĩa của bảo hiểm là “an toàn và đáng tin cậy”. Nói cách khác, bảo hiểm tồn tại như một cơ chế bảo đảm, phòng tránh những rủi ro không thể lường trước. Trong đời sống ngày nay, việc sở hữu sản phẩm bảo hiểm đã trở thành một điều phổ biến đối với nhiều cá nhân và tổ chức. Đội ngũ các tổ chức và nhân viên bán bảo hiểm cũng không ngừng phát triển, cung cấp những dịch vụ chất lượng để đáp ứng các nhu cầu đa dạng của con người, như bảo hiểm thân thể, bảo hiểm tài sản, bảo hiểm đầu tư lấy lãi, bảo hiểm để chuẩn bị cho thời kỳ nghỉ hưu.
            Trong những thập niên qua, việc bán bảo hiểm đã chuyển từ bán sản phẩm đơn thuần thành tiếp thị thương hiệu, lấy khách hàng làm trung tâm. Các kỹ năng nghiệp vụ của nhân viên cũng theo nhu cầu của xã hội mà liên tục tăng cao, có như vậy, họ mới có thể cải thiện thương hiệu cá nhân, trở thành những cá nhân xuất sắc trong ngành bảo hiểm, thu về doanh số đáng ngưỡng mộ.
            Cuốn sách trên tay bạn được chia làm ba phần: kiến thức lý thuyết, thực hành cho người mới và những kỹ thuật nâng cao; từng bước giúp nhân viên bán bảo hiểm đi từ kỹ năng cơ sở bằng không đến thành thạo. Về nội dung cụ thể, cuốn sách này không chỉ nói về những kiến thức chuyên môn bảo hiểm, như các loại bảo hiểm, chương trình bảo hiểm, hợp đồng bảo hiểm…; mà còn có các bài tập thực tế về những kỹ thuật bán hàng, như khai thác yêu cầu của khách hàng, cách giải quyết khi khách hàng từ chối, loại bỏ những nghi ngại từ khách hàng, duy trì nhóm khách hàng…; nâng cao kinh nghiệm thực tế trong việc cải thiện hiệu suất bán hàng, xây dựng chiến lược bán hàng cho các loại khách hàng khác nhau, phương pháp phát triển các khách hàng lớn, phương thức tổ chức tăng thành viê Những kiến thức, kinh nghiệm và kỹ năng này đều có thể sử dụng ngay lập tức, giúp ích rất nhiều cho việc bán bảo hiểm.',
            'avatar' => 'ky_nang_lam_viec_5.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Chu Châu',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '60%'
        ]);
        Product::create([
            'name' => 'Biến công việc thành đam mê',
            'description' => 'Steve Jobs có một câu nói vô cùng nổi tiếng rằng: “Bạn phải yêu công việc bạn làm.” Việc đó chắc chắn nói dễ hơn làm và là một trong những khẩu hiệu thường gặp có thể khiến mọi người cảm thấy không thỏa mãn. Nếu chúng ta nên yêu thích công việc của mình, vậy chúng ta có thể đổ lỗi cho ai nếu chúng ta không có cảm giác đó? Mặc dù thật sai lầm khi đặt gánh nặng phải cảm thấy thỏa nguyện khi làm việc lên các cá nhân, nhưng chúng ta vẫn có thể làm một vài điều để biến công việc trở nên thú vị hơn một chút.
            Thông qua cuốn sách, tác giả Bruce Daisley đã chắt lọc các nghiên cứu từ những chuyên gia thành 30 phương pháp thay đổi đơn giản mà các cá nhân có thể thử hoặc gợi ý tại một buổi họp nhóm. Một số phương pháp thay đổi rất quen thuộc và được các công ty nổi tiếng áp dụng thành công từ rất lâu. Một số khác là những phương pháp hữu ích giúp điều chỉnh những thói quen xấu hình thành trong quá trình làm việc của các cá nhân. Một vài thay đổi trông có vẻ vô lý – nhưng chúng vô cùng hữu dụng. Cuốn sách được chia thành ba phần. Kết hợp với nhau, ba phần này xây dựng nên một kế hoạch tạo ra môi trường làm việc hạnh phúc hơn. Nhưng mỗi chương vẫn có một sự độc lập nhất định, vì vậy hãy chọn một chương, đọc nó, thử nó, đề xuất nó trong một buổi họp nhóm, hoặc cho một người bạn mượn cuốn sách này... Bạn sẽ thấy rằng tất cả chúng ta đều có thể khiến công việc trở nên vui vẻ trở lại.
            Công việc của chúng ta – bất kể là gì – đều giúp mang lại ý nghĩa cho cuộc sống. Mặc dù chúng ta có thể miễn cưỡng thú nhận sự yêu thích dành cho công việc, nhưng chúng ta không bao giờ nên xấu hổ khi cảm thấy tự hào với niềm hạnh phúc có được từ công việc. Nếu bạn không hài lòng với hiện trạng, nếu bạn muốn biết làm thế nào mọi thứ có thể được thực hiện tốt hơn, nếu bạn đang tìm kiếm sự hoàn thành tốt hơn trong công việc và một cuộc sống ít gặp khó khăn hơn, cuốn sách này chắc chắn sẽ giúp bạn làm được điều đó.',
            'avatar' => 'ky_nang_lam_viec_6.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 60.000,
            'author' => 'Bruce Daisley',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '40%'
        ]);
        Product::create([
            'name' => 'Dùng chữ sao cho đúng viết gì cũng thấy hay',
            'description' => 'Là người phụ trách mục Quan điểm – Góc nhìn cho tờ New York Times, Trish Hall đã dành nhiều năm đắm chìm trong những cuộc tranh luận, đam mê và các ý tưởng dẫn đầu xu hướng - nhưng tất nhiên trong đó có cả những câu văn rối rắm, nhưng biệt ngữ đau đầu nhức óc và những bài viết chán ngắt. Dựa trên kinh nghiệm mình, Trish Hall đã viết nên cuốn sách “Dùng chữ sao cho đúng viết gì cũng thấy hay” với mục đích giúp các độc giả là sinh viên, người xin việc và các tác giả tân binh muốn được xuất bản sách viết được những áng văn hay và thu phục lòng người. Thông qua cuốn sách này, Trish Hall sẽ chỉ cho độc giả cách trình bày ý kiến của mình một cách thật thuyết phục, cho dù bạn đang viết bản thảo cho một chuyên mục, một bài luận cho giáo sư tại trường đại học, một email tìm việc làm, hay thậm chí là một mẩu ghi chú cho chồng của bạn. Mặc dù cuốn sách chủ yếu là về viết lách, tác giả đã chèn thêm các yếu tố tâm lý học để làm luận chứng cho những phương pháp mà bà đưa ra. Hiểu biết về hành vi của con người cũng rất hữu dụng khi giao tiếp trực tiếp. Hãy yên tâm sử dụng những biện pháp này, cho dù nó đòi hỏi tính nghệ thuật, kĩ thuật và một sự am hiểu tâm lý con người, vì nó sẽ làm tăng xác suất thành công của bạn.',
            'avatar' => 'ky_nang_lam_viec_7.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Rish Hall',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Rèn luyện tư duy phản biện',
            'description' => 'Như bạn có thể thấy, chìa khóa để trở thành một người có tư duy phản biện tốt chính là sự tự nhận thức. Bạn cần phải đánh giá trung thực những điều trước đây bạn nghĩ là đúng, cũng như quá trình suy nghĩ đã dẫn bạn tới những kết luận đó. Nếu bạn không có những lý lẽ hợp lý, hoặc nếu suy nghĩ của bạn bị ảnh hưởng bởi những kinh nghiệm và cảm xúc, thì lúc đó hãy cân nhắc sử dụng tư duy phản biện! Bạn cần phải nhận ra được rằng con người, kể từ khi sinh ra, rất giỏi việc đưa ra những lý do lý giải cho những suy nghĩ khiếm khuyết của mình. Nếu bạn đang có những kết luận sai lệch này thì có một sự thật là những đức tin của bạn thường mâu thuẫn với nhau và đó thường là kết quả của thiên kiến xác nhận, nhưng nếu bạn biết điều này, thì bạn đã tiến gần hơn tới sự thật rồi!
            Những người tư duy phản biện cũng biết rằng họ cần thu thập những ý tưởng và đức tin của mọi người. Tư duy phản biện không thể tự nhiên mà có.
            Những người khác có thể đưa ra những góc nhìn khác mà bạn có thể chưa bao giờ nghĩ tới, và họ có thể chỉ ra những lỗ hổng trong logic của bạn mà bạn đã hoàn toàn bỏ qua. Bạn không cần phải hoàn toàn đồng ý với ý kiến của những người khác, bởi vì điều này cũng có thể dẫn tới những vấn đề liên quan đến thiên kiến, nhưng một cuộc thảo luận phản biện là một bài tập tư duy cực kỳ hiệu quả.',
            'avatar' => 'ky_nang_lam_viec_8.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Albert Rutherford',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'The Right It - Ý tưởng đúng đắn chắc chắn thành công',
            'description' => 'Bạn có biết về Quy luật thất bại của thị trường không? Đó là:
            Hầu hết các sản phẩm mới sẽ thất bại trên thị trường, ngay cả khi thực hiện thành công.
            Nghe có vẻ rất đáng sợ, thậm chí quy luật này đã đánh bại hàng triệu nhà khởi nghiệp thậm chí là cả các “ông lớn” tên tuổi trong kinh doanh. Tuy nhiên bằng kinh nghiệm của mình tại Google, với các thành tựu xuất sắc trên cương vi một doanh nhân và nhà tư vấn, cũng như là nhà diễn thuyết uy tín tại Đại học Stanford và Google, tác giả Alberto Savoia đã viết cuốn “Ý tưởng đúng đắn, chắc chắn thành công” để “bày cách” giúp chúng ta hạ gục con Quái Vật Thất Bại.
            Mỗi ngày, hàng triệu người trên khắp thế giới đang nỗ lực để đưa ra những ý tưởng mới. Một số trong những ý tưởng này sẽ thành công tuyệt vời, tạo ra tác động lớn đến thế giới và văn hóa của chúng ta như Google, vắc-xin Polio, Harry Potter hay Ford Mustang. Những ý tưởng khác sẽ có thành quả nhỏ hơn, cá nhân hơn nhưng không kém phần ý nghĩa. Cũng trong lúc này, một nhóm người khác đang nỗ lực không kém để phát triển những ý tưởng mới nhưng khi ra mắt sẽ không tránh được thất bại. Một số trong đó sẽ thất bại một cách ngoạn mục và công khai: như New Coke, bộ phim John John Shaw, hay Ford Edsel. Một số khác sẽ nhỏ hơn, riêng tư hơn, nhưng chắc chắn mùi vị thất bại đem đến bao giờ cũng đắng ngắt.
            Hầu hết khi bắt tay vào thực hiện ý tưởng mới, mọi người đều tin rằng họ ý tưởng của mình sẽ thành công. Tất cả những gì họ phải làm là làm việc chăm chỉ và thực hiện tốt. Thật không may, điều này khó có thể khi thi. Luật thất bại thị trường cho chúng ta biết rằng có tới hơn 90 % các sản phẩm, dịch vụ, doanh nghiệp và sáng kiến mới sẽ thất bại ngay sau khi chúng được tung ra, bất kể chúng hứa hẹn như thế nào, chúng ta cam kết về chúng ra sao, hoặc chúng ta tiến hành tốt đến thế nào. Đây là một thực tế khó chấp nhận. Alberto Savoia tin rằng chúng ta thất bại vì chúng ta không thực sự rõ những gì mình đang làm, nhất là khi ngay từ đầu chúng ta khăng khăng cho rằng ý tưởng này là ưu việt và cách làm này đã gặt hái được thành công trong quá khứ.
            Với đầy đủ các nghiên cứu về những trường hợp cụ thể, bài học về tạo dữ liệu cứng của riêng bạn, chiến lược tương tác thị trường và giới thiệu về khái niệm nguyên mẫu giả (không phải nguyên mẫu), “Ý tưởng đúng đắn, chắc chắn thành công” là một cuốn sách đột phá, mang tính thực tiễn cao và đưa ra một công thức đã được chứng minh để biến ý tưởng, sản phẩm, dịch vụ và doanh nghiệp thành những nỗ lực thành công.
            “Chắc chắn rằng bạn đang xây dựng Ý Tưởng Đúng Đắn và đảm bảo rằng bạn thực sự chú tâm vào nó trước khi bắt tay vào thực hiện nó đúng đắn.',
            'avatar' => 'ky_nang_lam_viec_9.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 60.000,
            'author' => 'Alberto Savoia',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Quản lý thời gian chu toàn công việc',
            'description' => 'Mỗi người đều sở hữu 24 giờ một ngày, nhưng có người thảnh thơi mà vẫn đạt được hiệu suất cao trong công việc; có người lại luôn hối hả, 24 giờ một ngày chưa bao giờ là đủ với họ mà thành tựu chẳng được bao nhiêu. Bạn có bao giờ thắc mắc nguyên nhân sự khác biệt này? Câu trả lời nằm ở cách quản lý thời gian của mỗi người.
            Trong cuốn “Quản lý thời gian chu toàn công việc”, Matt Sandrini chia sẻ các nguyên tắc bí mật được ông sử dụng để đưa các doanh nhân hàng đầu từ mất kiểm soát thời gian đến sử dụng thời gian hiệu quả, mang lại năng suất cực kỳ cao.
            Dựa trên nhiều năm kinh nghiệm huấn luyện những triệu phú và nhà sáng lập tỷ phú, nghiên cứu mới nhất về tâm lý học hành vi và kinh nghiệm cá nhân của ông khi xây dựng các doanh nghiệp từ xa, Matt Sandrini đưa ra từng bước để bạn giành lại quyền kiểm soát thời gian và thu được kết quả ngoài kỳ vọng trong Quản lý thời gian chu toàn công việc.',
            'avatar' => 'ky_nang_lam_viec_10.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Matt Sandrini',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => '21 quy tắc cơ bản để quản lý thời gian',
            'description' => 'Bạn không hề đơn độc khi có cảm giác rằng mình không có đủ thời gian trong ngày. Trên thực tế, tất cả mọi người đều quá bận rộn và xã hội của chúng ta đang trở nên bận rộn hơn bao giờ hết. Một nghiên cứu gần đây cho thấy rằng người trưởng thành trung bình chỉ có hơn bốn giờ rảnh rỗi mỗi tuần. Chừng đó là quá ít thời gian để dành cho các nhiệm vụ và mục tiêu cá nhân. Trong khi, những nhiệm vụ và mục tiêu cá nhân đó lại là yếu tố tạo nên cuộc sống của bạn. Nhưng trung bình bạn dành được bao nhiêu thời gian cho chúng? Chỉ có bốn giờ.
            Quả là một thực tế ảm đạm. Không, chúng ta có thể từ chối nó, đây là một cuộc khủng hoảng thời gian ngày càng lớn. Thẳng thắn mà nói, việc thiếu thời gian trong cuộc sống cá nhân của mọi người đã trở thành một “bệnh dịch”. Mọi người có ít thời gian hơn cho bản thân họ. Điều đó nghĩa là có ít thời gian hơn để làm những gì quan trọng, cho dù là để thực hiện các mục tiêu cuộc sống hoặc dành thời gian quý giá cho gia đình và những người thân yêu.
            Cuộc sống hiện đại hàng ngày của chúng ta bao gồm những gián đoạn, thông báo và các cuộc gọi liên tục khiến chúng ta phải chú ý. Chúng ta dành nhiều thời gian trong ngày để “cắm mặt” vào hàng loạt các yêu cầu, thông tin và tin tức hơn là thực hiện những nhiệm vụ khiến chúng ta cảm thấy được sống. Để rồi đến cuối ngày, chúng ta chợt nhận ra mình chả làm được việc gì cả.
            Nếu bạn mệt mỏi vì luôn phải sống cuộc sống như vậy, luôn vội vã và để công nghệ chi phối thời gian hay cứ trì hoãn mỗi khi bạn nên làm việc đây chính là lúc phải quản lý tốt hơn cuộc sống của mình để vượt qua cuộc khủng hoảng thời gian và sự thôn tính của công nghệ.
            Với 21 lời khuyên đơn giản, cuốn sách này sẽ giúp bạn lấy lại thời gian, thực hiện được những nhiệm vụ và mục tiêu cá nhân. Chắc chắn, cuộc sống của bạn sẽ trải qua ít căng thẳng hơn khi bạn bắt đầu tự tháo gỡ khỏi vô vàn những sao nhãng bất tận. Vì vậy, nếu bạn đã sẵn sàng để đòi lại thời gian và cuộc sống của mình, thì hãy bắt đầu ngay!',
            'avatar' => 'ky_nang_lam_viec_11.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Craig Jarrow',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Lập kế hoạch tổ chức công việc hiệu quả',
            'description' => '“Lập kế hoạch tổ chức công việc hiệu quả” sẽ giúp bạn học hỏi tất cả những bí quyết để gắn kết các nhân viên giỏi và truyền cho họ cảm hứng làm việc tốt nhất. Trong cuốn sách này, tác giả sẽ sơ đồ hóa rõ ràng các mối quan hệ giữa văn hóa, sự thành công và độ gắn kết, đồng thời giúp bạn xây dựng những bản kế hoạch hành động cụ thể nhằm định hình văn hóa tại nơi làm việc - với mục đích thúc đẩy thành công, và tiếp theo đó, cải thiện sự gắn kết lẫn hiệu quả công việc.
            Cuốn sách sẽ cung cấp cho bạn một mô hình “sổ tay chiến thuật” dễ dàng được áp dụng, cùng ba chương sách đầy những ví dụ thực tiễn về các “chiến thuật” nhằm hướng đến thay đổi đáng kể tình hình hiện tại. Xuyên suốt nội dung cuốn sách đan xen các vấn đề thường gặp trong môi trường lao động nhiều thế hệ để đảm bảo bạn không bỏ sót bất kỳ một nhân viên nào.
            Lập kế hoạch tổ chức công việc hiệu quả bao gồm nhiều chương chứa đầy những ví dụ cụ thể về cách thức cải thiện văn hóa doanh nghiệp và mức độ gắn kết nhân viên – thông qua ứng dụng khoa học kỹ thuật, quá trình hoạt động và mẫu thiết kế - với mục tiêu thúc đẩy sự thành công cho cả người lao động lẫn doanh nghiệp.',
            'avatar' => 'ky_nang_lam_viec_12.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Jamie Notter, Maddie Grant',
            'pro_pub_id' => 'NXB Dân Trí',
            'sale' => '40%'
        ]);
        Product::create([
            'name' => 'Nghệ thuật thuyết trình trước công chúng',
            'description' => 'Tôi đã từng rất tuyệt vọng. Tôi mất hàng năm trời sợ hãi những buổi thuyết trình và đã làm khá nhiều trò điên rồ để né tránh, thậm chí có lần tôi bịa ra một vụ tai nạn xe hơi để lấy cớ không đến tham gia cuộc họp tôi phải đứng lên thuyết trình.
            Tôi biết mình phải thay đổi, phải làm chủ được kỹ năng này. Tôi đã dành quá nhiều thời gian trốn chạy, viện cớ dù đó là việc tôi làm.
            Tôi nhận ra tôi đã thành công ở những lĩnh vực khác trong cuộc sống, thế nhưng tôi vẫn trốn tránh việc thuyết trình với nỗi sợ hãi và khiếp đảm.
            Và bạn biết rồi đấy, tôi đã tìm ra cách.
            Tôi nhận ra mình cần làm gì để giảm bớt nỗi sợ và phát triển nội dung. Đến mức mà bây giờ, tôi trở nên yêu thích nó” - Mark Rodes.',
            'avatar' => 'ky_nang_lam_viec_13.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Mark Rhodes',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '40%'
        ]);
        Product::create([
            'name' => 'Kỹ năng thuyết trình chuyên nghiệp',
            'description' => 'Trong cuốn sách này, TS. Laura Sicola sẽ giúp bạn:
            Xác định điểm mù trong giao tiếp (khoảng cách giữa điều bạn muốn được mọi người cảm nhận khi bạn nói và cách bạn thực sự thể hiện), điều này cản trở bạn đạt được mục tiêu của mình như thế nào?
            Khám phá những phương pháp sử dụng giọng nói nhằm thu hút người nghe.
            Học cách điều chỉnh phong cách nói để bạn thể hiện được dáng vẻ lãnh đạo chân thực nhất khi tiếp cận với mọi đối tượng.
            Vượt qua rào cản tinh thần để nói một cách tự tin và hấp dẫn trên sân khấu, trên máy ảnh hoặc thậm chí trên điện thoại.
            Thực hành cách kể chuyện lôi cuốn, đưa dữ liệu cuộc sống của bạn vào các bài thuyết trình.
            Tìm hiểu phương pháp kết hợp tất cả các phần này lại với nhau giúp phản chiếu hình ảnh lãnh đạo tốt nhất, tối đa hóa ảnh hưởng và tác động tích cực của bạn.',
            'avatar' => 'ky_nang_lam_viec_14.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 60.000,
            'author' => 'TS. Laura Sicola',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Cách tạo ra những sản phẩm trường tổn',
            'description' => 'Từ những kinh nghiệm được đúc rút sau khi làm việc với các doanh nghiệp và nhà sáng tạo như Google, American Apparel, tác giả John Grisham, cũng như các cuộc phỏng vấn với những người bán hàng tuyệt vời trong thời đại chúng ta, Ryan Holiday đã khám phá ra bí ẩn của những sản phẩm trường tồn.
            Những ví dụ hấp dẫn của anh ấy bao gồm:
            Rick Rubin - nhà sản xuất cho Adele, Jay-Z và Red Hot Chili Peppers đã dạy các nghệ sĩ của mình vượt qua những suy nghĩ ngắn hạn và tạo ra cảm hứng dài hạn từ chính công việc mà họ đang theo đuổi.
            Tim Ferriss, người có sách đã bán được hàng triệu bản, một phần vì anh kiểm tra nghiêm ngặt mọi yếu tố trong tác phẩm của mình để xem điều gì tạo ra phản ứng mạnh nhất.
            Harper Lee, người đã chuyển đổi một bản thảo bị từ chối nhiều lần thành To Kill a Mockingbird (Giết con chim nhại) với sự giúp đỡ cũng như sự phản hồi phù hợp của biên tập viên.
            Winston Churchill, Stefan Zweig và Lady Gaga, những người từng học các nguyên lý thiết yếu để xây dựng một nền tảng của những người ủng hộ trung thành, tận tụy.',
            'avatar' => 'ky_nang_lam_viec_15.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 60.000,
            'author' => 'Ryan Holiday',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Cách tạo nội dung thao túng người dùng',
            'description' => 'Cuốn sách cung cấp một cách tiếp cận đột phá trong việc tạo ra những thông điệp đáng nhớ dễ thực hiện, khó quên và không thể chối từ.
            Tiến sĩ Carmen Simon đã cung cấp và phân tích các kiến thức về khoa học thần kinh và tâm lý học nhận thức để tạo ra nội dung đáng nhớ, tác động lên trí nhớ của người khác. Một cách cụ thể, có 15 biến số đáng nhớ: ngữ cảnh, tín hiệu, điểm khác biệt, cảm xúc, sự thật, sự quen thuộc, động lực, tính mới, lượng thông tin, mức độ liên quan, tần suất lặp lại, nội dung tự tạo, cường độ cảm quan, các khía cạnh xã hội và sự bất ngờ.',
            'avatar' => 'ky_nang_lam_viec_16.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 60.000,
            'author' => 'Carmen Simon',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Một lần biết buông vạn lần hạnh phúc',
            'description' => 'Ai trong chúng ta cũng muốn hạnh phúc nhưng lại chẳng mấy ai hiểu rõ hạnh phúc là gì? Phải làm sao để có được hạnh phúc?
            Giống như những đứa trẻ đi lạc trong mê cung cuộc đời, chúng ta sợ hãi, bất lực và muốn bỏ cuộc khi những khó khăn bủa vây mà không có lấy một tia sáng chỉ đường.
            Một người đau khổ vì tình yêu.
            Một người thất vọng về tình bạn.
            Một người muốn mệt mỏi muốn từ bỏ ước mơ.
            Một người từng lầm lỗi mong cầu được tha thứ.
            Mỗi người đều có một câu chuyện phía sau, những tổn thương riêng, ngay cả những người chúng ta nghĩ rằng họ đang hạnh phúc, đang cười vui vẻ cũng không hẳn là cuộc sống của họ không có vấn đề.
            Vậy thứ trái tim chúng ta đang cần là gì? Đó chính là sự thấu hiểu và lắng nghe để trái tim cảm thấy được yêu thương. Đó cũng chính là lý do cho sự ra đời của cuốn sách “Một lần biết buông vạn lần hạnh phúc”. Cuốn sách tổng hợp những câu chuyện có thật được gửi đến chương trình Dear Sugar - một chương trình truyền thanh trên kênh WBUR. Sau mỗi câu chuyện là những lời khuyên thẳng thắn, giàu lòng nhân ái và cũng không kém phần hài hước về tình yêu và cuộc sống được đúc kết từ chính cuộc đời của Sugar – Cheryl Strayed.
            “Không ai có thể bảo vệ bạn khỏi những đau khổ mà bạn phải gánh chịu. Khóc cũng không hết, gặm nhấm cũng không được, chạy trốn hay trả đòn đều không có tác dụng và ngay cả chữa trị cũng không phải là cách. Chúng sẽ vẫn ở đó chừng nào bạn còn tồn tại. Bạn phải sống chung với điều đó, học cách yêu chúng và vượt qua. Và khi khiến bản thân vượt lên trên tất cả, hãy chạy thật nhanh về hướng những giấc mơ đẹp đẽ và hạnh phúc nhất mà bạn có thể mơ bằng cách băng qua cây cầu xây trên lòng khao khát được bình yên của chính mình.”
            Bóng tối phía trước sẽ không thể cản được bước chân chúng ta khi trái tim mang theo ánh sáng của hi vọng.',
            'avatar' => 'ky_nang_song_1.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Cheryl Strayed',
            'pro_pub_id' => 'NXB Dân Trí',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Giao tiếp không chỉ bằng ngôn từ',
            'description' => 'Đàm phán là một phần cuộc sống hàng ngày của chúng ta.Đó là điều chúng ta thực hiện mỗi ngày. Nhưng bạn có thường nghĩ kỹ trước khi đàm phán một vấn đề gì đó không? Điều gì là yếu tố quan trọng nhất để tạo nên một cuộc đàm phán thành công?
            Nếu bạn muốn cách làm thế nào để đàm phán giỏi hơn trong cuộc hội thoại tiếp theo, trong hội nghị sắp tới hay trong một cuộc tương lai với nhà cung cấp hoặc khách hàng hãy cho phép bản thân có được vài giờ nhàn rỗi, yên tĩnh để đọc cuốn sách này.
            Sau khi đọc cuốn sách:
            Bạn sẽ hiểu nguyên tắc và bản chất căn bản của đàm phán hợp tác lẫn đàm phán cạnh tranh, cũng như sự khác biệt giữa chúng.
            Bạn sẽ tự phản ánh – và cải thiện – hành vi đàm phán của cá nhân mình.
            Bạn có thể đối phó với các đối tác khó nhằn cũng như sự vụ bất công một cách chuyện nghiệp.
            Đó là tất cả những gì bạn nhận được từ cuốn sách này. Hãy tận hưởng khoảng thời gian đọc sách này và điều này sẽ đưa bạn đến một thời khắc sáng chói.',
            'avatar' => 'ky_nang_song_2.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Jutta Portner',
            'pro_pub_id' => 'NXB Đại Học Kinh Tế Quốc Dân',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => 'The 30-Day Money Cleanse: Kỹ năng quản lý tài chính cá nhân trong 30 ngày',
            'description' => 'Bạn có thường gặp vấn đề về tài chính cá nhân không? Hay đơn giản hơn là bạn có hay than phiền về tình trạng không nhớ mình đã chi tiêu những gì. Hay bạn có phải là người kiếm được bao nhiêu cũng tiêu hết bấy nhiêu nên không thể tiết kiệm được tiền dù cho lương có tăng lên. Bạn có thấy căng thẳng và lo lắng khi đối diện với các hóa đơn, các mục cần để dành như tiền bảo hiểm, tiền dưỡng già, tiền mua nhà…? Nếu có thì bạn cũng giống như hàng triệu người ngoài kia đang cảm thấy bế tắc về tiền bạc và nhiều khi lại tự trách móc bản thân vì không thể quản lý tài chính hiệu quả. Nhưng bạn có thể ngừng ngay những suy nghĩ tiêu cực đó và bắt tay vào chương trình cải thiện tài chính của mình nhờ cuốn sách “đáng kinh ngạc” của Ashley.
            Bằng chương trình Thanh lọc Tài Chính trong 30 ngày, “The 30-Day Money Cleanse: Kỹ năng quản lý tài chính cá nhân trong 30 ngày” giúp bạn định hình lại cách chi tiêu, thay đổi tư duy về tiền bạc và đảm bảo chúng ta quản lý tài chính cá nhân hiệu quả. Cuốn sách chính là cứu cánh cho mối quan hệ không mấy tốt đẹp của bạn với tiền bạc và giúp bạn vạch ra một kế hoạch chi tiêu để có thể vẫn vui vẻ mà không tốn kém. Lối tư duy tích cực và đúng đắn về tiền bạc mà Ashley đưa ra sẽ nhanh chóng hỗ trợ bạn hoàn thành các mục tiêu mà bạn mong muốn nhất trong đời.',
            'avatar' => 'ky_nang_song_3.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Ashley Feinstein Gertsley',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => 'Quý cô thông minh yêu thương chính mình',
            'description' => 'Con người ai cũng không ngừng nỗ lực để đạt được hạnh phúc rồi lại làm mất chúng, dường như ai cũng từng có hạnh phúc nhưng lại làm mất đi, dường như nó chỉ tồn tại trong một khoảnh khắc, và chúng ta không biết làm cách nào để có được hạnh phúc lâu dài.
            Cuốn sách “Quý cô thông minh yêu thương chính mình” là một cuốn sách tuyệt vời mà bất cứ cô gái nào cũng cần phải có để trở thành một quý cô thông minh, tìm được hạnh phúc, thành công trong tình yêu và cuộc sống.
            Bạn phải hiểu rằng, trở thành một “con chim hoàng yến” trong tay người khác sẽ khiến bạn không còn cảm giác về giá trị bản thân. Khi đó, bạn cũng khó giữ được sự tự tin, nhiều lúc cũng chỉ là cố gắng chịu đựng cuộc sống hiện tạộc đời này không phải chỉ có vật chất, mà bạn còn có nhân cách độc lập, còn cần có sự đồng điệu giữa hai tâm hồn.
            Một người phụ nữ thông minh không bao giờ đặt số phận của mình vào tay của bất cứ ai rồi nằm đó chờ vận mệnh. Khi gặp khổ đau thì than thân trách phận, suy sụp tinh thần, lấy nước mắt ra làm vũ khí. Phụ nữ thông minh dám chấp nhận, dám từ bỏ, tự kiếm tiền, và yêu quý bản thân! Bạn nên hiểu rằng, người phụ nữ hạnh phúc là người có bản lĩnh, hiểu về bản thân mình, tự trưởng thành, khống chế được cảm xúc, tự chữa lành tổn thương, quản lý hạnh phúc, hiểu rõ tình yêu rốt cuộc là gì, có cái nhìn đúng đắn về tình yêu và hôn nhân,…',
            'avatar' => 'ky_nang_song_4.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Trương Nhạn Hàm',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '35%'
        ]);
        Product::create([
            'name' => 'Nghĩ khác để thành công',
            'description' => 'Trong cuốn “Brian Tracy – Nghĩ khác để thành công” , tác giả có sách bán chạy nhất Brian Tracy và nhà trị liệu tâm lý Christina Stein trình bày những quy luật tinh thần cụ thể và thực tiễn để giúp người độc từng bước vượt qua những khuôn mẫu tư duy tiêu cực, qua đó hình thành tư duy lạc quan, phá vỡ các giới hạn và sống đúng với bản chất của mình, bộc lộ năng lực tối đa và vươn tới những nấc thang hạnh phúc, thành đạt trong cả công việc lẫn cuộc sống cá nhân.',
            'avatar' => 'ky_nang_song_5.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Brian Tracy',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '40%'
        ]);
        Product::create([
            'name' => 'Nghệ thuật giao tiếp hiệu quả (Tái bản)',
            'description' => 'Nghệ thuật giao tiếp hiệu quả là cuốn sách viết về cách kế bạn và cách làm chủ các tình huống trong xã hội.
            Tác giả Patrick King tập trung vào các chiến lược và kỹ thuật giúp bạn trở nên cuốn hút hơn, thể hiện được nhiều cảm xúc hơn trong giọng điệu và trao đổi thông tin tế nhị
            hơn.
            Cuốn sách sẽ mang đến cho bạn:
            Nghệ thuật làm chủ cảm xúc
            Nghệ thuật thuyết trình hiệu quả
            Xác định rõ thông điệp cần truyền tải
            Kỹ năng lắng nghe
            Kỹ năng giao tiếp trong kinh doanh
            Kỹ năng đặt câu hỏi hiệu quả
            Cuốn sách giúp bạn mở lòng đủ để tạo nên một cuộc đối thoại ý nghĩa thay vì chỉ ngồi đợi điều bất ngờ xảy ra.
            Và hãy nhớ một điều, nếu mọi chiến lược không hiệu quả, chỉ cần giao tiếp như những đứa trẻ với nhau.',
            'avatar' => 'ky_nang_song_6.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Patrick King',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Phép màu để trở thành chính mình (Bản tiếng Trung: "成長的奇迹")',
            'description' => 'Cuốn sách “Phép màu để trở thành chính mình” chính là những đúc kết thành công qua những nỗ lực vượt khó của tác giả, từ khi bắt đầu lập nghiệp cho đến bây giờ - là Tổng Giám đốc New Toyo Việt Nam. Là phụ nữ, con đường lập nghiệp không hề đơn giản, và càng không hề đơn giản hơn đối với bản thân tác giả - là một phụ nữ làm việc trong một môi trường mà chỉ có sức lực người đàn ông nhiều khi mới đảm đương nổi. Đối với công việc, chị không hề có kinh nghiệm, càng không được đào tạo trước đó.  Vì thế, chị vừa là thực tập sinh vừa là thầy giáo cho chính mình; ngã từ đâu đứng lên từ đấy; sai xót chỗ nào chỉnh sửa tại chỗ đó. Bài học mỗi ngày của chị là rút kinh nghiệm và ngày mai phải tốt hơn ngày hôm nay.
            Những kinh nghiệm lập nghiệp, điều hành doanh nghiệp kinh doanh được tác giả Nhan Húc Quân chia sẻ trong tác phẩm, chính là những kinh nghiệm quý báu, bài học giá trị dành cho các bạn trẻ - những ai đã và đang đi trên con đường lập thân, lập nghiệp đặc biệt là những cô gái trẻ mang nhiều khát vọng thành công.
            Tác giả Nhan Húc Quân chia sẻ: “Ước mơ chỉ có thể thành hiện thực khi trái tim bạn đã cảm nhận hoặc tìm thấy niềm đam mê trong lĩnh vực mà mình yêu thích; hoặc trong công việc hằng ngày của chính mình. Các bạn hoàn toàn có quyền hy vọng và đặt niềm tin vào sự đam mê chính đáng của mình bằng lòng quả cảm, thái độ nghiêm túc, chính chắn trong suy nghĩ, sự chăm chỉ, nhiệt huyết và tính kiên định cộng với khả năng thực hành của chính bản thân. Biết chọn cách sống tử tế, đàng hoàng với những người xung quanh thì cuộc sống sẽ luôn mỉm cười với bạn. Và bạn sẽ thong dong, khoan thai bước tiếp những con đường rộng mở ở phía trước…” Với riêng các độc giả nữ chị còn nhắn nhủ: “Tôi còn nhớ năm học lớp 5, cô giáo dạy học sinh nữ rằng: “Sau này trưởng thành, các em phải có 50% sự nhu mì, tỉ mỉ của phụ nữ và 50% còn lại phải có sự can đảm, dũng cảm của người đàn ông”. Lúc đó, tôi rất tâm đắc và thích thú lời nói này. Và bây giờ, tôi hài lòng vì đã làm được điều đó. Hy vọng các bạn cũng vậy”.',
            'avatar' => 'ky_nang_song_7.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Nhan Húc Quân',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '40%'
        ]);
        Product::create([
            'name' => 'Phép màu để trở thành chính mình (Bản tiếng Anh: "The Miracle of becoming oneself")',
            'description' => 'Cuốn sách “Phép màu để trở thành chính mình” chính là những đúc kết thành công qua những nỗ lực vượt khó của tác giả, từ khi bắt đầu lập nghiệp cho đến bây giờ - là Tổng Giám đốc New Toyo Việt Nam. Là phụ nữ, con đường lập nghiệp không hề đơn giản, và càng không hề đơn giản hơn đối với bản thân tác giả - là một phụ nữ làm việc trong một môi trường mà chỉ có sức lực người đàn ông nhiều khi mới đảm đương nổi. Đối với công việc, chị không hề có kinh nghiệm, càng không được đào tạo trước đó.  Vì thế, chị vừa là thực tập sinh vừa là thầy giáo cho chính mình; ngã từ đâu đứng lên từ đấy; sai xót chỗ nào chỉnh sửa tại chỗ đó. Bài học mỗi ngày của chị là rút kinh nghiệm và ngày mai phải tốt hơn ngày hôm nay.
            Những kinh nghiệm lập nghiệp, điều hành doanh nghiệp kinh doanh được tác giả Nhan Húc Quân chia sẻ trong tác phẩm, chính là những kinh nghiệm quý báu, bài học giá trị dành cho các bạn trẻ - những ai đã và đang đi trên con đường lập thân, lập nghiệp đặc biệt là những cô gái trẻ mang nhiều khát vọng thành công.
            Tác giả Nhan Húc Quân chia sẻ: “Ước mơ chỉ có thể thành hiện thực khi trái tim bạn đã cảm nhận hoặc tìm thấy niềm đam mê trong lĩnh vực mà mình yêu thích; hoặc trong công việc hằng ngày của chính mình. Các bạn hoàn toàn có quyền hy vọng và đặt niềm tin vào sự đam mê chính đáng của mình bằng lòng quả cảm, thái độ nghiêm túc, chính chắn trong suy nghĩ, sự chăm chỉ, nhiệt huyết và tính kiên định cộng với khả năng thực hành của chính bản thân. Biết chọn cách sống tử tế, đàng hoàng với những người xung quanh thì cuộc sống sẽ luôn mỉm cười với bạn. Và bạn sẽ thong dong, khoan thai bước tiếp những con đường rộng mở ở phía trước…” Với riêng các độc giả nữ chị còn nhắn nhủ: “Tôi còn nhớ năm học lớp 5, cô giáo dạy học sinh nữ rằng: “Sau này trưởng thành, các em phải có 50% sự nhu mì, tỉ mỉ của phụ nữ và 50% còn lại phải có sự can đảm, dũng cảm của người đàn ông”. Lúc đó, tôi rất tâm đắc và thích thú lời nói này. Và bây giờ, tôi hài lòng vì đã làm được điều đó. Hy vọng các bạn cũng vậy”.',
            'avatar' => 'ky_nang_song_8.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Nhan Húc Quân',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '40%'
        ]);
        Product::create([
            'name' => 'Phép màu để trở thành chính mình',
            'description' => 'Cuốn sách “Phép màu để trở thành chính mình” chính là những đúc kết thành công qua những nỗ lực vượt khó của tác giả, từ khi bắt đầu lập nghiệp cho đến bây giờ - là Tổng Giám đốc New Toyo Việt Nam. Là phụ nữ, con đường lập nghiệp không hề đơn giản, và càng không hề đơn giản hơn đối với bản thân tác giả - là một phụ nữ làm việc trong một môi trường mà chỉ có sức lực người đàn ông nhiều khi mới đảm đương nổi. Đối với công việc, chị không hề có kinh nghiệm, càng không được đào tạo trước đó.  Vì thế, chị vừa là thực tập sinh vừa là thầy giáo cho chính mình; ngã từ đâu đứng lên từ đấy; sai xót chỗ nào chỉnh sửa tại chỗ đó. Bài học mỗi ngày của chị là rút kinh nghiệm và ngày mai phải tốt hơn ngày hôm nay.
            Những kinh nghiệm lập nghiệp, điều hành doanh nghiệp kinh doanh được tác giả Nhan Húc Quân chia sẻ trong tác phẩm, chính là những kinh nghiệm quý báu, bài học giá trị dành cho các bạn trẻ - những ai đã và đang đi trên con đường lập thân, lập nghiệp đặc biệt là những cô gái trẻ mang nhiều khát vọng thành công.
            Tác giả Nhan Húc Quân chia sẻ: “Ước mơ chỉ có thể thành hiện thực khi trái tim bạn đã cảm nhận hoặc tìm thấy niềm đam mê trong lĩnh vực mà mình yêu thích; hoặc trong công việc hằng ngày của chính mình. Các bạn hoàn toàn có quyền hy vọng và đặt niềm tin vào sự đam mê chính đáng của mình bằng lòng quả cảm, thái độ nghiêm túc, chính chắn trong suy nghĩ, sự chăm chỉ, nhiệt huyết và tính kiên định cộng với khả năng thực hành của chính bản thân. Biết chọn cách sống tử tế, đàng hoàng với những người xung quanh thì cuộc sống sẽ luôn mỉm cười với bạn. Và bạn sẽ thong dong, khoan thai bước tiếp những con đường rộng mở ở phía trước…” Với riêng các độc giả nữ chị còn nhắn nhủ: “Tôi còn nhớ năm học lớp 5, cô giáo dạy học sinh nữ rằng: “Sau này trưởng thành, các em phải có 50% sự nhu mì, tỉ mỉ của phụ nữ và 50% còn lại phải có sự can đảm, dũng cảm của người đàn ông”. Lúc đó, tôi rất tâm đắc và thích thú lời nói này. Và bây giờ, tôi hài lòng vì đã làm được điều đó. Hy vọng các bạn cũng vậy”.',
            'avatar' => 'ky_nang_song_9.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Nhan Húc Quân',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '40%'
        ]);
        Product::create([
            'name' => 'Brush! Thanh xuân rực rỡ đến thế',
            'description' => 'Trong một ngày hè rực lửa, giấc mơ trở thành cầu thủ bóng chày chuyên nghiệp của Sorairo Suzuki chính thức tan vỡ. Cấp hai kết thúc, với mắt cá chân bó bột, lời tỏ tình thất bại, và một tương lai mù mịt
            Cuộc đời Sorairo rẽ bước ngoặt khi quyết định từ bỏ giấc mơ trở thành vận động viên và thi tuyển vào trường nghệ thuật. Ở trường cấp ba, cậu quen biết Kanade, cô gái kỳ lạ luôn đứng hút thuốc trên tầng thượng tòa nhà khoa mỹ thuật.
            Cấp hai đã kết thúc, cấp ba cũng không giống như những gì cậu tưởng tượng. Sorairo vẫn mù mịt về mọi thứ xung quanh. Cậu chỉ biết mình đã bị kéo và những năm tháng điên rồ nhất cuộc đời mình.',
            'avatar' => 'ky_nang_song_10.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Izuru Kanaka',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '40%'
        ]);
        Product::create([
            'name' => 'Nghĩ đơn giản đời bình an',
            'description' => 'Cách bạn tập trung chú ý, cởi mở nhận thức, hướng tới những mục tiêu tốt đẹp và cao cả - cũng giúp làm tăng: nhận thức về hạnh phúc, kết nối với những người xung quanh (dưới dạng sự cảm thông và lòng trắc ẩn được tăng cường), cân bằng trong cảm xúc, và sự kiên cường khi đối diện với thử thách. Các nghiên cứu đã chỉ ra rằng khi nhận thức về ý nghĩa và mục đích tăng lên, thì sự thanh thản trong cuộc sống cũng sẽ tăng lên.
            Cơ hội chỉ ưu ái cho những kẻ có sự chuẩn bị, việc trải nghiệm bài tập Bánh xe Nhận thức trong cuốn sách này sẽ giúp bạn có được sự chuẩn bị cho những cơ hội mà cuộc sống đem lại. Khi đã thành thạo trong việc sử dụng công cụ này, bạn sẽ nhận thấy bản thân có khả năng vượt qua được bão tố trong cuộc sống một cách dễ dàng hơn và sống cuộc đời của mình trọn vẹn hơn, cởi mở hơn với bất kỳ trải nghiệm nào, dù là tích cực hay tiêu cực.
            Với những ví dụ điển hình về những cá nhân cụ thể và cách họ sử dụng Bánh xe Nhận thức để củng cố tâm trí và cải thiện bản thân, bạn sẽ nhận thấy rằng việc tận dụng tất cả những nhận thức mới mẻ về tâm trí cũng như ý nghĩa của nhận thức mở rộng, và những trải nghiệm trực tiếp về cách mà bài tập Bánh xe Nhận thức hợp nhất vào ý thức, sẽ góp phần giúp bạn củng cố tâm trí của bản thân và nuôi dưỡng hạnh phúc trong cuộc sống.
            Nếu bạn đã từng trải nghiệm chất lượng của cuộc sống này trong cuộc sống thường nhật, thì những bài tập về sự chú ý, nhận thức và mục đích sống sẽ giúp tăng cường và củng cố ngay chính nơi bạn đang đứng. Thật tuyệt vời. Và nếu như những đặc điểm đó của hạnh phúc dường như quá xa vời hay không quen thuộc với bạn, và bạn cần chúng phải trở nên thân thuộc hơn với cuộc sống hằng ngày của mình, thì bạn sẽ tìm được cách để thay đổi trong cuốn sách này.
            Nghĩ đơn giản đời bình an dạy cho độc giả cách khai thác sức mạnh của bản thân, hiểu được cách thức để tập trung sự chú ý, nhận thức cởi mở, giảm nỗi sợ hãi, lo lắng và căng thẳng. Với Nghĩ đơn giản đời bình an bạn sẽ được trải nghiệm một cảm giác mới mẻ hơn, giúp bạn củng cố tâm trí của bản thân và nuôi dưỡng hạnh phúc trong cuộc sống.',
            'avatar' => 'ky_nang_song_11.png',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'MD, Daniel J.Siegel',
            'pro_pub_id' => 'NXB Công Thương',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Khéo léo đối nhân được lòng thiên hạ',
            'description' => 'Nếu bạn đã sẵn sàng thất bại, yêu công việc của mình, và biến ước mơ thành hiện thực, nhà doanh nghiệp và huấn luyện viên kinh doanh Brian Dixon có một thông điệp cho bạn: “Khéo léo đối nhân, được lòng thiên hạ.”
            Sau khi thất bại trong nhiều mối quan hệ và dự án, Brian Dixon quyết tâm khám phá bí quyết để hạnh phúc trong công việc mà sống một cuộc đời có ý nghĩa. Trong Khéo léo đối nhân, được lòng thiên hạ, Brian trao cho bạn chiếc chìa khoá quan trọng nhất để hạnh phúc trong các mối quan hệ của bạn và mở cánh cửa đến mục tiêu, đam mê, và lợi nhuận.
            Sự thật là, bạn không tự mình đạt được ước mơ. Bạn cần những người xung quanh. Và họ cũng cần bạn. Khéo léo đối nhân, được lòng thiên hạ là cuốn sách hướng dẫn đầy đủ để giúp bạn tận dụng nguồn tài nguyên quan trọng nhất để thành công trong kinh doanh và cuộc sống: các mối quan hệ.
            Hãy cùng tác giả Brian khám phá tư duy đặt con người lên hàng đầu, bao gồm:
            Chìa khoá cốt lõi để mở rộng mạng lưới mạnh mẽ của bạn (mà không trở nên giả tạo)
            Phương pháp 10 bước để tạo ra tuyên bố sứ mệnh cá nhân của bạn
            Tại sao gia đình thực ra sẽ giúp bạn thành công, và làm sao để nhìn nhận con cái bạn như một di sản thay vì gánh nặng
            Phương pháp phản trực giác để tăng thu nhập của bạn (mà không phải bỏ việc)
            Những bí quyết để biến đội ngũ làm việc hời hợt của bạn trở thành đội nhóm trong mơ
            Cách nhanh nhất, an toàn nhất để chinh phục với những người khó ưa trong cuộc đời bạn
            Thêm vào đó, bạn sẽ học được những phương pháp luyện tập hàng ngày để thay đổi hoàn toàn tư duy của bạn.
            Cuốn sách“Khéo léo đối nhân, được lòng thiên hạ” là một kế hoạch chi tiết theo từng bước để giúp bạn yêu công việc và quyết liệt theo đuổi đam mê. Với vô số những nguyên tắc chiến lược, những bí quyết thực tế, và những ví dụ sinh động, bạn sẽ nhận được sự trợ giúp đắc lực của mọi người xung quanh để tự tin và thành công.
            Bạn đã mệt mỏi vì phải vật lộn? Và đã sẵn sàng hành động ngay bây giờ? Hãy bắt đầu mở cánh cửa đến sự thịnh vượng ngay hôm nay.',
            'avatar' => 'ky_nang_song_12.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 60.000,
            'author' => 'Brian Dixon',
            'pro_pub_id' => 'NXB Đại Học Kinh Tế Quốc Dân',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Sống tối giản',
            'description' => 'Quá nhiều người trong chúng ta đang chịu gánh nặng của những thứ ta sở hữu, những cam kết, lịch trình và các suy nghĩ trong tâm trí. Trong trạng thái ấy, ta không thể chậm lại và tận hưởng cuộc sống vì quá bận bịu. Trong sâu thẳm, chúng ta e sợ rằng một ngày nào đó ta sẽ thức dậy và nhận ra mình đã bỏ lỡ những năm tháng quý báu đáng ra nên dùng để nuôi nấng các con hoặc có một sức khỏe tốt – tất cả chỉ vì ta đã đặt quá nhiều chú ý vào những thứ không thực sự quan trọng. Vì vậy, đã đến lúc nhường chỗ cho những gì quan trọng thông qua chiến lược tối giản cuộc sống.
            Thông qua cuốn sách Sống tối giản: Biết đủ chính là hạnh phúc của Erica Layne, hãy cùng khám phá cách áp dụng lối tư duy tối giản vào mọi khía cạnh của cuộc sống bằng cách thay đổi cách bạn nghĩ về nhà cửa, sự nghiệp, các mối quan hệ, gia đình và tiền bạc... Với triết lý thực tế, các bài tập và hoạt động đơn giản cùng các chiến lược dễ áp dụng để loại bỏ những phiền nhiễu và căng thẳng không cần thiết, đây là cuốn sách hướng dẫn cần thiết cho bất cứ ai muốn giải tỏa sự lộn xộn về thể chất, tinh thần và cảm xúc.
            Sự tối giản không chỉ là việc bỏ bớt đồ đạc của chúng ta – nó còn là một phong cách sống.',
            'avatar' => 'ky_nang_song_13.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Erica Layne',
            'pro_pub_id' => 'NXB Thanh Niên',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Đơn giản hơn, tinh tế hơn',
            'description' => 'Khi trưởng thành, phụ nữ thường xuyên bị rơi vào cảm giác quẫn trí khi phải đối diện với sự thật là chúng ta không thể ở ngoài kia để cứu thế giới hoặc ít nhất là gánh vác một công việc quyền cao chức trọng. Chúng ta luôn bị giày vò rằng mình cần phải làm nhiều hơn những gì đang làm – bất kể là chúng ta đang làm gì đi chăng nữa, thì chúng ta vẫn luôn chắc chắn rằng mình có thể làm nhiều hơn và tốt hơn. Những áp lực vô hình như vậy khiến chúng ta rơi vào căng thẳng triền miên, cố gắng đến kiệt sức, chấp nhận hy sinh bản thân để phục vụ những nhu cầu của người khác.
            Để thoát khỏi những áp lực vô hình chúng ta nên tìm một giải pháp dễ dàng nhất ngay cả khi chúng ta làm những việc không hề dễ dàng, tìm một lý do để tiếp tục cố gắng, để sống và làm việc kiên cường trên suốt chặng đường dài mang tên “cuộc đời”.
            Chúng ta không thể đòi hỏi một bông hoa phải nở cả năm. Chúng ta hiểu rằng nó có những mùa và chu kỳ của riêng nó. Vậy tại sao chúng ta lại đòi hỏi bản thân mình phải luôn trong trạng thái chiến đấu? Điều này thật vô lý và nó chỉ khiến chúng ta gục gã trước khi đạt được thành công. Cách duy nhất để những người phụ nữ nhỏ bé có thể vươn lên giành chiến thắng chính là phải tôn trọng chính bản thân mình, tôn trọng sự nữ tính bên cơ thể chúng ta, lắng nghe cơ thể và hiểu điều nó muốn, từ đó đưa ra những lựa chọn sáng suốt nhất.
            Cuốn sách “Đơn giản hơn, tinh tế hơn” chính là món quà mà tác giả Kate Northrup mang đến để giúp chúng ta giải phóng những gánh nặng, những sự kỳ vọng đang đặt lên vai, từ đó dành sự ưu tiên cho bản thân trong việc tự chăm sóc, tự trân trọng, và quan trọng hơn hết là tự yêu thương chính mình.',
            'avatar' => 'ky_nang_song_14.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Kate Northrup',
            'pro_pub_id' => 'NXB Dân Trí',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Tuổi trẻ - Sống an nhiên nhưng đừng an phận',
            'description' => 'Trong những giây phút thành thật nhất với bản thân, có bao giờ bạn cảm thấy lo lắng, sợ rằng nếu cuộc đời mình cứ tiếp diễn như hiện tại, thì năm sau, rồi năm sau nữa, bạn sẽ vẫn chỉ giậm chân tại chỗ? Trước khi bạn kịp nhận ra, quỹ thời gian của bạn đã cạn kiệt mà bạn vẫn chỉ ở nguyên vị trí cũ, bị mắc kẹt và tràn đầy hối hận vì đã không chịu hành động khi còn có thể.
            Tuy vậy, không mấy người trên đời lại quyết tâm thay đổi để đạt được những thành tựu trọn vẹn trong công việc cũng như cuộc sống cá nhân. Sợ hãi những xung đột, các rủi ro và cảm giác phiền muộn, chúng ta thường có xu hướng ở yên trong vùng an toàn, cố hết sức bảo vệ chính mình và tự thỏa mãn với nhịp sống đều đặn không biến cố. 
            Để phá vỡ tình trạng đình trệ, thôi thúc các cá nhân khai phá tiềm năng của bản thân và nắm lấy những cơ hội vươn tới thành công đích thực và ý nghĩa, cuốn sách “Tuổi trẻ - Sống an nhiên nhưng đừng an phận” của Sten Morgan đã cung cấp một hướng đi rõ ràng và có tính ứng dụng cao cho mọi người đọc. Bất kể bạn bao nhiêu tuổi, đến từ đâu, và đang ở giai đoạn nào trong sự nghiệp, hãy nhớ rằng bạn luôn có thể thay đổi - và sự thay đổi bắt đầu từ chính tư duy của bạn, cũng như những quan niệm mà bạn sở hữu về thế giới xung quanh mình.',
            'avatar' => 'ky_nang_song_15.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Sten Morgan',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Ăn nói thuyết phục hạ gục đối phương',
            'description' => 'Hãy tưởng tượng rằng bạn phải giao tiếp với tất cả mọi người trên thế giới này. Bảy tỉ người – đây quả là một ý tưởng điên rồ phải không? Nhưng giờ thì hãy giả sử trong cuộc sống hàng ngày bạn chỉ phải giao tiếp với bảy người. Đây lại là một con số với một câu chuyện hoàn toàn khác.
            Giao tiếp như một nhu cầu sống không thể thiếu.
            Hãy nhìn vào các con số: Bảy tỉ người là dân số thế giới, còn bảy người chính là bảy ngôn ngữ chính trong cuộc sống, được cuốn sách phân tích, tổng kết, đánh giá một cách chi tiết dựa trên số liệu thực tế và những nghiên cứu có tính khoa học. Dù bạn nói tiếng Anh, tiếng Nga, tiếng Tây Ban Nha hay tiếng Trung Quốc, bạn cũng nằm ở một trong bảy ngôn ngữ chính kia mà thôi. Việc giao tiếp và thấu hiểu người nói chuyện với mình hoàn toàn không còn là vấn đề khó khi bạn có bộ công cụ này trong tay.',
            'avatar' => 'ky_nang_song_16.jpg',
            'pro_att_id' => 'Kỹ năng sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Fred KenDall, Anna KenDall',
            'pro_pub_id' => 'NXB Đại Học Kinh Tế Quốc Dân',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Tuổi trẻ không hối tiếc',
            'description' => 'Tôi tin rằng chỉ khi nào chúng ta dám đối mặt với cái chết, chúng ta mới có thể hiểu được giá trị của sự sống. Ai cũng biết rằng một ngày nào đó mình sẽ chết, nhưng chúng ta vẫn sống như mình là bất tử. Một ngày nào đó chúng ta sẽ làm điều mình yêu thích. Một ngày nào đó chúng ta sẽ thay đổi. Một ngày nào đó chúng ta sẽ trở thành con người mình muốn trở thành. Nhưng nếu bạn đã chần chừ cả năm mười năm không làm việc gì đó, chẳng có lý do để làm việc đó ngày hôm nay, hay ngày mai, hay một ngày nào đó. Đến khi cái chết tìm đến với ta, tất cả đã quá muộn....
            Một cuộc sống không xoành xĩnh, với tôi, là một cuộc sống có ý nghĩa. Là cuộc sống khi mà tôi tạo ra được giá trị thực sự, giúp đỡ được nhiều người, cho đi nhiều hơn là nhận. Là cuộc sống khi mà sau khi tôi chết đi, sẽ có người thương tiếc sự ra đi của tôi không phải vì mối quan hệ máu mủ, mà bởi vì tôi đã góp phần tạo nên những thay đổi tích cực trong cuộc sống của họ.',
            'avatar' => 'nghe_thuat_song_1.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Huyền Chip',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Đọc sách và con đường gian nan vạn dặm',
            'description' => 'Cuốn sách “Đọc sách và con đười gian nan vạn dặm” nói lên những trải nghiệm, suy tư, trăn trở của tác giả về thực trạng giáo dục và văn hóa đọc ở Việt Nam. Cuốn sách chỉ ra rằng sự mở rộng của văn hóa đọc có liên hệ mật thiết với sự phát triển của một quốc gia. Một đất nước sẽ gặp phải trở lực không thể vượt qua nếu như mỗi công dân không tích cực trau dồi hiểu biết, tăng cường kĩ năng sống, làm phong phú đời sống tinh thần thông qua việc đọc và vận dụng tri thức từ sách. Ngoài ra, tác giả cũng đưa ra nhận định về nguyên nhân cho những vấn đề nổi cộm trong giáo dục Việt Nam trong suốt thời gian qua.
            Cũng trong tựa sách này, lần đầu tiên tác giả công bố bản dịch hoàn chỉnh các văn bản luật, quy định của Nhật Bản liên quan tới tổ chức thư viện, khuyến đọc và phục hưng văn hóa đọc. Cùng với hai bài khảo sát thực trạng đọc sách tại Nhật Bản, hệ thống văn bản này cung cấp một tham chiếu độc đáo đối với Việt Nam hiện nay trong nỗ lực cải thiện và nâng cao dân trí nói chung thông qua khuyến đọc. Vì vậy, bên cạnh việc truyền cảm hứng đọc sách, cuốn sách còn là tài liệu tham khảo hữu ích cho quá trình phát triển văn hóa đọc tại Việt Nam.',
            'avatar' => 'nghe_thuat_song_2.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Nguyễn Quốc Vương',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Tôi, Tương lai & Thế giới',
            'description' => 'Tôi, Tương lai & Thế giới ra đời đúng vào thời điểm cần thiết nhất đối với Việt Nam. Môi trường sống của chúng ta, kể cả ở Việt Nam đang thay đổi ở một tốc độ chưa từng có do Cách mạng công nghiệp 4.0 đem lại. Trong sự thay đổi ấy, luật tiến hóa của vạn vật sẽ là tấm lưới chọn lọc những ai tồn tại. Đó không phải người thông minh nhất, cũng không phải người mạnh nhất hay nhanh nhất mà là người có khả năng thích nghi cao nhất.
            Qua những trải nghiệm trong cuộc sống, tác giả Nguyễn Phi Vân giúp người đọc vượt thời gian và không gian để có một cảm nhận cho những thay đổi hằng ngày trong cuộc sống tương lai mà người đọc có thể không tưởng tượng được, và từ đó rút ra những kinh nghiệm sống và những bài học quý giá mà chúng ta cần phải chuẩn bị để không bị đào thải bởi luật tiến hóa.
            Như nhà khoa học gia, chính trị gia Benjamin Franklin từng nói: “Thất bại trong chuẩn bị, bạn đang chuẩn bị cho sự thất bại”. Tôi, Tương lai & Thế giới nên là cuốn sách đầu giường cho các bạn trẻ, các nhà giáo dục, kể cả những nhà khởi nghiệp và những người làm chính sách để có sự chuẩn bị và sẵn sàng nắm bắt cơ hội khi cơn sóng thần Cách mạng công nghiệp 4.0 tràn đến.',
            'avatar' => 'nghe_thuat_song_3.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Nguyễn Phi Vân',
            'pro_pub_id' => 'NXB Thế Giới',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Sống không sợ mất, đi là phải chất',
            'description' => 'Hôm nay là ngày bất khả thi của tôi, cái ngày tôi cảm giác thấy hành trình không thể hoàn thành. Nếu không thể ngồi dậy được, chắc chắn tôi sẽ chết trên sa mạc Gobi. Quá muộn để nghĩ ra một kế hoạch dự phòng hay gọi cứu hộ, tôi phải đứng dậy và đi tiếp, phải tự thân nỗ lực để đi được tới chặng nghỉ tiếp theo. Tôi không muốn chết mà sao mọi thứ khó khăn quá…
            Để vượt qua giờ phút sinh tử này, tôi cần chia nhỏ vấn đề ra, giải quyết từng chút một. Nếu tôi có thể đi tới Delgerkhangai, cách đây khoảng bốn ngày đi bộ, tôi sẽ an toàn. Tôi cần một động lực lớn lao để vượt qua được những điều không thể. Lúc ấy, tôi nhớ lại lời của Ripley: “Phi thường chính là khi bạn tiếp tục cuộc hành trình dù điều gì xảy ra đi chăng nữa”',
            'avatar' => 'nghe_thuat_song_4.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Ash Dykes',
            'pro_pub_id' => 'NXB Văn Hóa Văn Nghệ',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Nếu như không thể nói nếu như',
            'description' => 'Trong đời người, chắc chắn ai cũng đã từng nuối tiếc một điều gì đó. Những lúc ấy, người ta hay dùng mệnh đề "Nếu như...": "Nếu như lúc trước anh không như vậy!", "Nếu như ngày trước anh gặp em sớm hơn!", "Nếu như thời gian quay trở lại!",...
            Đó là câu nói thể hiện sự hụt hẫng và nuối tiếc.
            Nhưng mệnh đề kết quả sẽ mãi mãi không bao giờ trở thành hiện thực khi mệnh đề điều kiện lại là những sự việc trong quá khứ. Tất cả mọi thứ đến rồi sẽ đi như một cơn gió. Cái ở lại chỉ là những kỷ niệm hạnh phúc, vì vậy ta hãy biết sống và trân trọng cái hiện tại.',
            'avatar' => 'nghe_thuat_song_5.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Ash Dykes',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Gia huấn ca tường chú',
            'description' => 'Văn hoá của người Việt đề cao đạo lý làm người, giáo dục tình nghĩa cha con, mẹ con, dâu rể, quan hệ thầy trò. “Gia Huấn Ca” là một tập sách dạy về các đạo lý đó, cách đối nhân xử thế trong gia đình, ngoài xã hội, sao cho cùng biết người biết ta, tôn trọng người, tôn trọng mình. Mặc dù “Gia Huấn Ca” được phổ biến và lưu truyền cách đây mấy trăm năm nhưng có nhiều giá trị, nền tảng tiến bộ và phù hợp cho đến ngày nay.

            Chẳng hạn đối với cha mẹ hai bên đều phải đối đãi công bằng:
            Dù nội ngoại, hai bề cũng vậy
            Đừng tranh hành bên ấy bên này
            Cù lao đôi đức cao dày
            Phải lo hiếu kính đêm ngày không khăng
            
            Đối với chị em, họ hàng:
            Miếng bùi ngọt chia đều như một,
            Khi nắng mưa ấm sốt đỡ tay
            Mấy nhau như bát nước đầy
            Lá lành đùm bọc, bóng cây rườm rà
            
            Dạy con lòng yêu thương với người cơ nhỡ, không may:
            Thấy ai đói rách thì thương
            Rách thường cho mặc, đói thường cho ăn,
            Thương người như thể thương thân,
            
            Người ta phải bước khó khăn, đến nhà:
            Đồng tiền bát gạo mang ra',
            'avatar' => 'nghe_thuat_song_6.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Gia huấn ca tường chú',
            'pro_pub_id' => 'NXB Hội Nhà Văn',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Có mẹ trong đời',
            'description' => 'Không có tham vọng đúc kết hay đưa ra lời giáo huấn trực tiếp nào, tự thân những câu chuyện trong hai tập sách Có Cha Trong Đời và Có Mẹ Trong Đời tìm cách đi vào trái tim người đọc bằng những tình cảm tự nhiên, ngọt ngào, những tâm tình ấm áp; nhẹ nhàng đánh thức trong mỗi người niềm hạnh phúc lớn lao - được có cha, có mẹ trong đời. Bộ sách còn là lời thầm thì nhỏ nhẹ, nhắc nhỏ ta rằng, việc thực hành đạo hiếu không thuần túy là trách nhiệm, mà là một cách thế tắm mình trong suối nguồn an lạc.
            Cũng có thể xem đây là món quà tinh thần rất quý giá cho những người đang làm cha, làm mẹ. Lối dạy dỗ con cái, việc lấy chính cuộc đời mình nêu gương từ những người cha, người mẹ trong các hồi ức sẽ là cẩm nang quý giá để giúp ta làm tốt thiên chức với con cái, trách nhiệm với cuộc đời.
            Có Cha Trong Đời và Có Mẹ Trong Đời, cuối cùng, còn có ý nghĩa như một dịp được cùng chia sẻ thông điệp yêu thương khởi phát từ sâu trong tâm khảm những người con hiếu thảo hướng về đấng sinh thành của mình trong mùa Vu Lan. Và không chỉ trong mùa Vu Lan!',
            'avatar' => 'nghe_thuat_song_7.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 77.000,
            'author' => 'Nhiều tác giả',
            'pro_pub_id' => 'NXB Phụ Nữ',
            'sale' => '30%'
        ]);
        Product::create([
            'name' => 'Nếu biết anh sẽ là người cũ',
            'description' => 'Tình yêu có nhiều khía cạnh, có những tình yêu một chiều, có những tình yêu hai chiều nhưng cả hai cứ luôn làm khổ nhau, có những hy vọng sai lầm, có những người yêu một cách vô tâm, có những người còn vương vấn mãi tình cũ
            Trong Nếu Biết Anh Sẽ Là Người Cũ, tác giả viết về tình yêu với những khía cạnh khác nhau, với góc nhìn từ những người cho đi tình yêu, những người nhận lấy tình yêu, những người đã đi qua tình yêu của họ rồi nhưng vẫn còn đọng lại một phần nào đó trong nhau. Tình yêu tuổi trẻ không phải lúc nào cũng chia tay trong dang dở, có những kết cục đủ để người ta bước đi tiếp và bỏ nhau lại phía sau, một lần và mãi mãi, vì người đó đã không còn xứng đáng nữa. Có những kết thúc như một sự giải thoát cho những trái tim đã không còn chung nhịp đập. Có những mối quan hệ có thể chữa lành được những nỗi đau, cũng có những mối quan hệ chỉ mang đến cho nhau những nỗi đau khác.
            Buông bỏ không phải là ngừng yêu, chỉ là lòng tự tôn không cho phép mình ở lại nữa.
            Mỗi người một số phận, mỗi người một cách yêu. Có những điều là đúng với người này nhưng không đúng với người kia. Vì tình yêu làm gì có đúng sai. Vì yêu là yêu thôi.
            Cuốn sách này là những câu chuyện tình, có buồn có vui, có tử tế có tệ bạc, có day dứt có trọn vẹn – cũng như cuộc đời muôn màu muôn vẻ. Đọng lại sau tất cả, có lẽ chỉ là những bài học về chân thành – dung hòa – tử tế.',
            'avatar' => 'nghe_thuat_song_8.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Hashtag Dawn',
            'pro_pub_id' => 'NXB Văn Hóa Văn Nghệ',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Này cô gái, thức tỉnh đi!',
            'description' => 'Con đường đi qua khó khăn hay thương tổn trầm trọng là con đường gian khổ nhất mà một người có thể gặp phải. Nhưng hãy luôn nhớ: cách duy nhất để thoát khỏi con đường đó chính là băng qua nó. Nỗi đau và thương tổn là cơn lốc xoáy tàn khốc, chúng sẽ kéo bạn xuống đáy nếu bạn không chiến đấu để được nổi lên. Sẽ có những lúc, đặc biệt lúc ban đầu, bạn sẽ phải vận dụng mọi sức mạnh bên trong để giữ đầu mình được nổi lên trên những con sóng.
            Nhưng bạn phải giữ đầu mình nổi lên trên những con sóng. Sẽ rất khó, nhưng bạn vốn mạnh mẽ. Ngay cả khi bạn không cảm thấy như vậy vào lúc đó, thì sự thật là bạn vẫn đang hít vào và thở ra, tức là bạn còn đang chiến đấu chống lại cơn thủy triều đang chực cuốn trôi bạn.
            Bằng sự trung thực trước tất cả những nỗi đau và sự dí dỏm trước mọi nỗi sợ hãi, Rachel Hollis vạch trần và chiêm nghiệm những suy nghĩ lừa mị đã từng hành hạ chính cô (cũng như vô số phụ nữ trên đời này), đồng thời mở lối để bạn mạnh dạn vươn lên, thoát khỏi đau khổ và trở thành người phụ nữ vui vẻ, tự tin như bạn vốn xứng đáng như vậy.
            Cuốn sách Này cô gái, thức tỉnh đi! là lời kêu gọi dứt khoát và mãnh liệt, mở mang tầm mắt của bạn về một lối sống tràn trề đam mê, hối hả và đầy sự mãn nguyện.',
            'avatar' => 'nghe_thuat_song_9.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Rachel Hollis',
            'pro_pub_id' => 'NXB Văn Hóa Văn Nghệ',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Gieo mầm hạnh phúc',
            'description' => 'Mọi người trên thế gian đều mưu cầu hạnh phúc. Người biết thì thấy hạnh phúc luôn ở quanh mình. Người không biết thì cho rằng hạnh phúc ở thật xa và khó kiếm.
            Hạnh phúc thực ra luôn ẩn trong những điều giản dị. Ta hạnh phúc khi ta biết đủ, biết thứ tha, biết sống chậm lại để cảm nhận cuộc đời, biết buông bỏ những chấp niệm, hoài niệm.
            Ở đâu đó trong Gieo mầm hạnh phúc là những chiếc chìa khóa mầu nhiệm, mà tác giả đã âm thầm trao gửi cho những ai đang khao khát mở toang cánh cửa yêu thương để chào đón ánh bình minh rực rỡ.',
            'avatar' => 'nghe_thuat_song_10.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Thích Nữ Nhuận Bình',
            'pro_pub_id' => 'NXB Văn Hóa Văn Nghệ',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Thất nhân tâm',
            'description' => 'Thất nhân tâm là cuốn sách kỹ năng chỉ ra những cách nói chuyện, những hành vi, hành động tránh thất nhân tâm để đắc nhân tâm trong ứng xử, giao tiếp hằng ngày.
            Thất nhân tâm được tác giả trình vấn đề để đạt đắc nhân tâm, được lòng người theo cách phản biện. Ngụ ý làm nổi bật bản tính, ý nghĩa và hậu quả tai hại của hành vi không được lòng người trong giao tiếp. Với cuốn sách này, bạn đọc sẽ thấy được điều khác biệt ở chỗ những nguyên tắc được mổ xẻ dựa trên các khía cạnh tâm lý xử thế đa dạng, đa diện không theo lối bài học khô cứng, lý thuyết. Hẳn cuốn sách sẽ rất hữu ích, có giá trị cho bạn đọc mọi lứa tuổi, đặc biệt là những người trẻ đang gây dựng sự nghiệp, tìm kiếm sự thành công.
            Cuốn sách gồm 5 phần:
            Phần I: Những chuyện thất nhân tâm
            Phần II: Trị thất nhân tâm bằng đắc nhân tâm
            Phần III: Tâm lý thất nhân tâm và đắc nhân tâm khi nói chuyện hằng ngày
            Phần IV: Luật thuyết phục trên diễn đàn.
            Phần V: Muốn tránh thất nhân tâm và giao tiếp – xử thế đắc nhân tâm thì phải luyện đức thu tâm.',
            'avatar' => 'nghe_thuat_song_11.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Hoàng Xuân Việt',
            'pro_pub_id' => 'NXB Thanh Niên',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Yêu không tổn thương',
            'description' => 'Con người ai lại không khao khát có được một tình yêu đích thực và trọn vẹn. Thế nhưng những bi kịch tan vỡ, những tổn thương, những khác biệt không thể hòa giải vẫn luôn là câu chuyện diễn ra thường ngày.
            Yêu không tổn thương không nhằm thần thánh hóa tình yêu, cũng không phải cẩm nang giúp bạn chinh phục hay có được tình yêu, mà như chìa khóa giúp bạn thấu hiểu những chuyển động trong tình yêu từ nhiều góc độ như sinh học, tâm lý, xã hội, ngôn ngữ… Qua đó, bạn sẽ biết những quy luật chuyển động của các hormone cảm xúc, sự khác biệt của đàn ông sao Hỏa và đàn bà sao Kim, kể cả lớp màn ảo tưởng mà chủ nghĩa lãng mạn đã tiêm nhiễm vào con người như thế nào, từ đó có cách ứng xử phù hợp trong mối quan hệ.
            Để hạnh phúc bền chặt trong tình yêu là một nghệ thuật. Bằng việc trang bị hiểu biết, hiểu và yêu bản thân, bạn hoàn toàn có thể vượt lên những xáo động đơn thuần để làm chủ cảm xúc. Làm chủ cảm xúc để không ảo tưởng, không phiền lụy và quan trọng là để Yêu không tổn thương.',
            'avatar' => 'nghe_thuat_song_12.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 68.000,
            'author' => 'Nghị Quế',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Work-life balance',
            'description' => 'Bạn cảm thấy quay cuồng với cuộc sống? Công việc. Gia đình. Giấc ngủ. Bạn bè... - tất cả đều quan trọng với bạn và bạn chẳng thể tìm đủ chỗ cho chúng trong 24 tiếng đồng hồ ít ỏi! Xin chào, bạn không phải là người duy nhất gặp khó khăn.
            Chúng ta đều có những lúc căng thẳng và mệt mỏi vì không thể cân bằng công việc với cuộc sống, đến mức cảm thấy tội lỗi nếu lỡ không hoàn thành được một việc gì đó trong danh sách những điều cần ưu tiên. Cuốn sách thông minh, tinh tế và đầy tâm lý của Randi Zuckerberg sẽ phá vỡ quan điểm không đáng có này!
            Bằng cách cung cấp phương pháp Bộ Ba Lựa Chọn và những lời khuyên đầy thực tiễn, Randi đặt vào tay người đọc bí quyết để sống cuộc đời tươi đẹp nhất, sắp xếp cuộc sống thật hiệu quả. Thông qua nhiều câu chuyện quản lý cuộc sống của những chuyên gia tại các công ty hàng đầu thuộc thung lũng Silicon, của những người mẹ mong muốn dành thêm thời gian cho gia đình, của những sinh viên mới ra trường luôn cố gắng kiểm soát mọi thứ..., Randi đã truyền tải thông điệp: Đừng mong chờ sự cân bằng hoàn hảo, mà thay vì thế, hãy dám lựa chọn, gạt bỏ những kỳ vọng vô lý và tận hưởng những điều bạn thật sự trân trọng.
            Không chỉ phù hợp với những doanh nhân và lãnh đạo cấp cao, bộ công cụ có trong tác phẩm “Work-Life Balance” khả dụng với tất cả mọi người, đặc biệt là với những bạn trẻ - những người luôn cần cảm hứng và một kế hoạch sáng suốt để theo đuổi sự nghiệp.',
            'avatar' => 'nghe_thuat_song_13.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Randi Zuckerberg',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Làm chủ cuộc chơi thay đổi cuộc đời',
            'description' => 'Đây là hành trình có thật của một con người có xuất phát điểm còn không bằng một cá nhân tay trắng: một kẻ phạm nhân.
            Năm 2003, Weldon Long được phóng thích khỏi nhà giam, không tiền bạc và không nhà cửa. Nhưng chỉ 6 năm sau, đến năm 2009, ông đã gây dựng thành công một công ty có doanh thu hơn 20 triệu đô la. Hành trình phi thường từ đói nghèo, tù tội và vô gia cư đến một cuộc sống giàu có, hạnh phúc và bình yên của Weldon Long đã được không ít người nhận xét bằng hai tiếng "thần kỳ".
            Kỳ tích của Weldon Long được dựa trên Tư duy Thành đạt mạnh mẽ, loại tư duy giúp chúng ta vượt qua các thử thách dẫu gian khổ nhất và phát triển nhất quán kể cả trong nghịch cảnh. Cuốn sách bestseller của ông, "Làm chủ cuộc chơi, thay đổi cuộc đời" truyền đạt sống động năng lực của lòng kiên trì, hay còn gọi là sức mạnh của sự nhất quán, dựa trên tiền đề cơ bản rằng các tuyên bố cá nhân của mỗi chúng ta sẽ quyết định những hành động trong tương lai. Ta thường hành động theo những ý nghĩ và niềm tin lặp đi lặp lại trong đầu mình. Kết quả của những hành động đó dần tích lũy, cuối cùng hình thành chất lượng, hoàn cảnh cuộc sống và thành quả kinh doanh của ta. Do đó, những thay đổi mang tính cách mạng trong cuộc sống và kinh doanh có thể xuất hiện khi ta tái lập tư duy của mình và chịu trách nhiệm về những gì mình suy nghĩ và hành động.
            Hãy nhớ rằng: Sự giàu có, hạnh phúc và bình yên đều nằm trong tầm tay bạn. Hãy thể hiện một Tư duy Thành đạt và để tư duy đó thúc đẩy bạn trở nên vượt trội. Với cuốn sách kể lại hành trình từ một phạm nhân thành triệu phú của Weldon Long, những khả năng dành cho cuộc sống và việc kinh doanh của bạn sẽ trở nên vô tận.',
            'avatar' => 'nghe_thuat_song_14.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 35.000,
            'author' => 'Weldon Long',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Mình ơi... Về ăn cơm!',
            'description' => 'Tôi đã nhiều lần nghe Đức Tuấn hát "Chân tình" của Trần Lê Quỳnh. Đó là bài hát mở đầu của album "Trẻ mãi", nghe nói, đó là album người ca sĩ trẻ dành tặng cho một người thiếu nữ bị bệnh tim anh chưa kịp làm quen... Dần dần, tôi yêu trọn vẹn cả nét nhạc Trần Lê Quỳnh và giọng hát Đức Tuấn, không tách bạch ra được đâu là phần cảm xúc, đâu là phần kỹ thuật, chỉ cảm thấy ray rứt tâm can khi đâu đó vang lên những ca từ:
            Nguyện cho ngày tháng êm đềm như những sớm mai
            Những nhọc nhằn chớm quen, vẫn trong ngần mắt em... 
            Cầm trên tay tập tản văn "Mình ơi... Về ăn cơm!" Của hai bạn trẻ Lưu Quang Minh và Trần Khánh Ngân, càng đọc, tôi càng thấy gợi nhớ về bài hát ấy. Hiện lên qua các bài viết ngắn là hầu hết những cung bậc yêu thương, hy vọng dành cho gia đình (ở bình diện hẹp), và dành cho cuộc sống nói chung. Song bên cạnh sự lãng mạn, bay bổng của tình yêu, hai cây bút trẻ tuổi không ngại khai thác cả những "mặt trái" của tình cảm và các mối quan hệ gia đình. Ở nhiều bài viết, nhất là ở chùm "Muộn", có lẽ những người cứng lòng, từng trải cũng cảm thấy cay cay nơi đáy mắt.
            Tiếng gọi nhỏ nhẹ, có phần yếu ớt vang lên giữa đời sống xô bồ, nhiều dục vọng và cạm bẫy: "Mình ơi..."; đã trở thành "mệnh lệnh" của yêu thương: "Về ăn cơm!" Cảm xúc trở nên lắng đọng và trầm xuống như thể người viết muốn đưa chúng ta về với thời xa xưa, cổ kính. Những bài tản văn gói ghém cả trong đó những câu chuyện vui ít, buồn nhiều, cho cuộc sống hiện tại và tương lai không biết chung - riêng nặng nhẹ phần nào...
            Cái sự già dặn của tâm tưởng và cách viết đôi chỗ gieo một dấu lặng trong lòng. Điều ấy thật đáng ngạc nhiên khi tôi biết Lưu Quang Minh và Trần Khánh Ngân là hai cây bút còn rất trẻ, có đời sống khá hiện đại. Nhưng dần dần tôi "ngẫm" ra được rằng cả hai đang sống cho cả một tương lai rất dài phía trước, với lời xác tín chung thủy, chân tình. Sống một cách sâu sắc và thận trọng, điều đó thật đáng quý. Tất cả những câu chuyện đều hướng về hạnh phúc, viết cho hạnh phúc...',
            'avatar' => 'nghe_thuat_song_15.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Lưu Quang Minh, Trần Khánh Ngân',
            'pro_pub_id' => 'NXB Hội Nhà Văn',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Nên thân với đời',
            'description' => 'Cuốn sách viết về những kiến thức thực tiễn của cuộc sống mà chúng ta cần học ngoài những kiến thức nhận được trên ghế nhà trường, để hoàn thiện bản thân trở thành người thành đạt. Học giả Hoàng Xuân Việt chỉ ra cho bạn đọc những việc phá hoại tâm lực là gì? Rèn nghị lực ra sao? Luyện trí tưởng tượng thế nào thì tốt? Những phiền muộn nào khiến bạn rủn chí rồi dễ dàng đầu hàng sầu thảm? Được chia thành 2 phần: Nên thân và Yên tâm, cuốn sách nhỏ này sẽ vô cùng hữu ích cho người đọc trên hành trình hoàn thiện bản thân.
            Nên thân với đời nằm trong Tủ sách Học làm người của học giả Hoàng Xuân Việt, với những bài học vô cùng thiết thực, dù đã trải qua một thế kỷ nhưng vẫn còn vẹn nguyên giá trị cho người trẻ thời nay.',
            'avatar' => 'nghe_thuat_song_16.jpg',
            'pro_att_id' => 'Nghệ thuật sống',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Hoàng Xuân Việt',
            'pro_pub_id' => 'NXB Thanh Niên',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Thất Duyên Kiếp - Tập 1',
            'description' => 'Ba trăm năm trước bên ao Dao Trì có một viên sỏi nhỏ có linh trí được tiên tôn nhặt đi. Ba trăm năm sau, viên sỏi nở hoa, có tiên thể, xinh đẹp như hoa nhưng… IQ và EQ vẫn “trơ” như sỏi!!!
            Nhiệm vụ đầu tiên của Đàm Vô Hoan (tên của viên sỏi) là hạ phàm, giúp một người trần (thật ra là Thái tử tiên giới lịch kiếp) tên Quý Lăng Tiêu vượt qua Sinh kiếp. Những tưởng đây là một câu chuyện buồn bởi Quý Lăng Tiêu đã mất hết hy vọng sống, một lòng muốn chết, nhưng bi kịch lại rẽ ngang thành… hài kịch khi hắn gặp Đàm Vô Hoan!
            Hành trình đi tìm “chồng chưa cưới” của Đàm Vô Hoan sẽ diễn ra như thế nào?',
            'avatar' => 'ngon_tinh_1.jpg',
            'pro_att_id' => 'Cổ trang, Huyền ảo',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 35.000,
            'author' => 'Triết Nhĩ Thính Âm',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Doanh môn phục quý',
            'description' => 'Đêm động phòng, Lâm Di chết trong hỏa hoạn, lửa đỏ nuốt chửng thân thể nàng cùng nỗi oán hận không thể đong đếm. Ông trời không để nàng chết không cam lòng như vậy, vậy nên ban cho nàng một cơ hội nữa, để nàng quay trở lại thời điểm bản thân mới 13 tuổi, chân ướt chân ráo đến Kinh thành.
            Phượng hoàng niết bàn, dục hỏa trùng sinh!
            Gia phả Trần gia phức tạp, cuộc sống nơi Kinh thành vừa phồn hoa vừa giăng đầy cạm bẫy, Lâm Di sẽ từng bước từng bước thay đổi số phận như thế nào?',
            'avatar' => 'ngon_tinh_2.jpg',
            'pro_att_id' => 'Cổ trang, Trùng sinh',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 35.000,
            'author' => 'Vân Nghê',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Thịnh thế kiều y - Tập 1',
            'description' => 'Thái tử bị phế truất, mấy trăm mạng người hai nhà Tiền – Thịnh cũng theo đó mà trở thành cô hồn dã quỷ, so với tru di cửu tộc, còn thảm hơn nhiều lần.
            Tiền Tử Kỳ - người duy nhất trốn thoát khỏi biển lửa Tiền gia lại chết trong tay người mình yêu nhất. Mũi tên đó không những chấm dứt sinh mạng cô mà còn chấm dứt cả những tình cảm trong sáng, hồn nhiên nhất, gieo vào lòng người con gái xinh đẹp nỗi oán hận thấu trời xanh.
            Phượng hoàng niết bàn, dục hỏa trùng sinh. Tiền Tử Kỳ trở lại nhân thế trong thân xác của một đứa bé 9 tuổi ngô nghê. Gánh trên vai nỗi oan của mấy trăm người, Tiền Tử Kỳ phải làm sao để bắt những kẻ đứng sau nợ máu trả máu?',
            'avatar' => 'ngon_tinh_3.jpg',
            'pro_att_id' => 'Cổ trang, Trùng sinh',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 35.000,
            'author' => 'Phương Phương',
            'pro_pub_id' => 'Đang Cập Nhật',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Xuyên nhanh: Nhiệm vụ Ái Hồn - Tập 1',
            'description' => 'Ninh Ngưng – người thực hiện nhiệm vụ trong thế giới hệ thống bị thương nghiêm trọng, hồn thể suy yếu. Để có thể chắp vá hồn thể cho cô, Chủ thần của hệ thống không ngại phân tách linh hồn mình, giấu ở từng thế giới, chờ cô tương phùng.
            Ninh Ngưng xuyên đến thế giới cổ trang, tại đây, cô là tiểu quận chúa mũm mĩm, đáng yêu, là người được Hoàng thượng ngầm chỉ hôn cho Nhị hoàng tử Bách Lý Vân Khanh. Nhiệm vụ của cô là ngăn cản nữ chính cướp ngôi, đẩy vương triều Thiên Thụy đến cảnh ngàn kiếp bất phục.
            Ninh Ngưng tám tuổi, dáng vẻ như bánh bao nhỏ phải làm sao mới có thể ngăn cản hào quang nữ chính? Vị hoàng tử lạnh lùng, kiêu ngạo luôn phản đối việc chỉ hôn kia liệu có thèm để ý đến một cô bé lúc nào cũng gà gật, đi vài bước đã muốn cõng là cô không?',
            'avatar' => 'ngon_tinh_4.jpg',
            'pro_att_id' => 'Cổ trang, Xuyên không',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 20.000,
            'author' => 'Một Con Mèo Ngốc',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Tiểu thư hầu phủ - Tập 1',
            'description' => 'Vương Hân Dao bị tai nạn giao thông, xuyên về một triều đại không có thật trong lịch sử - Ung Triều. Điều đặc biệt là cô xuyên vào thai nhi, có một sinh mạng hoàn toàn mới.
            Ở kiếp này, Vương Hân Dao tên là Vương Tự Bảo hay còn gọi là Bảo Muội, là Bát tiểu thư của Hầu phủ - đích nữ duy nhất, được nâng như nâng trứng, hưởng mọi sự yêu thương, chiều chuộng của mọi người trong nhà. Thậm chí đến Thái hậu, Hoàng thượng cũng rất thiên vị cô bé, vì thế, ngay trong ngày mừng Vương Tự Bảo một tuổi, Hoàng thượng đã ban thánh chỉ, phong Vương Tự Bảo làm Quận chúa, bên cạnh đó còn dùng đất đai làm lễ vật.
            Với trí thông minh của một cô gái hiện đại hơn 20 tuổi, Vương Tự Bảo đã biết cách lấy lòng tất cả người trong nhà và những gia đình quyền thế khác, đồng thời thu thập tin tức về các danh gia vọng tộc, chuẩn bị vững chắc bàn đạp cho mình.
            Hành trình trở thành một đại phú hào của Vương Tự Bảo sẽ diễn ra như thế nào?',
            'avatar' => 'ngon_tinh_5.jpg',
            'pro_att_id' => 'Cổ trang, Xuyên không',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 20.000,
            'author' => 'Tiểu Ngọc Hồ',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Cẩm đường quy yến - Tập 1',
            'description' => 'Vì bị kẻ thù của cha bắt cóc hãm hại, Tần Nghi Ninh - Tứ tiểu thư tướng phủ - phải sống lưu lạc nơi rừng sâu núi thẳm, trong tình hình chiến tranh loạn lạc đặc biệt rối ren. Khi nàng được cha tìm thấy và đưa về phủ, nàng tưởng rằng từ đây mình sẽ có được gia đình vốn là nơi mình thuộc về. Thế nhưng, tất cả những gì diễn ra lại không như nàng tưởng tượng.
            Tổ mẫu vì đứa cháu gái giả mạo kia mà hắt hủi nàng, thậm chí còn muốn xua đuổi, hoài nghi nàng.
            Mẹ ruột không nhận nàng, còn cho rằng nàng là con riêng bên ngoài của Tần Thừa tướng.
            Đám gia nô thì trộm đồ, cắt xén đồ của nàng, khinh thường nàng là "người rừng".
            Ai cũng muốn bắt nạt nàng, ai cũng muốn chà đạp nàng, nhưng nàng là đích nữ của Tần Thừa tướng, là đứa con gái duy nhất của "Trí Phan An" Tần Hòe Viễn, nàng thông tuệ hơn người, nàng có thể chịu thua, để mặc người coi là quả hồng mà nắn bóp hay sao?',
            'avatar' => 'ngon_tinh_6.jpg',
            'pro_att_id' => 'Cổ trang',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 20.000,
            'author' => 'Phong Quang Tế Nguyệt',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Nông viên tự cẩm - Tập 1',
            'description' => 'Lâm Tiểu Uyển là một cô gái quá lứa lỡ thì sống ở thế kỷ 21. Vì lo cho các em ăn học nên cô đã gạt ước mơ và hoài bão sang một bên, đi làm nuôi các em trưởng thành. Vì sống tốt bụng, cô được một bà chủ nhà hàng món kho yêu quý và truyền nghề cho. Nhưng khi em trai em gái trưởng thành, cô cũng bắt đầu sống dư giả, đang muốn hưởng thụ cuộc sống thì đột nhiên lại xuyên không về thời cổ đại, vào một cô bé ốm yếu chưa được mười tuổi tên là Dư Tiểu Thảo.
            Dư Tiểu Thảo sinh ra và lớn lên ở làng chài Mặc Thành, cha thật thà, ngu hiếu, mẹ ốm yếu nhu nhược, huynh tỷ đệ đệ đều còn nhỏ tuổi. Lúc cha bị thương nặng suýt mất mạng, cả nhà nàng bị ông bà nội và bác cả nhẫn tâm đuổi ra ngoài, đói khổ lạnh lẽo, bơ vơ lạc lõng, căn nhà đơn sơ chỉ có bốn bức tường... Nhưng nàng không sợ!
            Xuyên qua từ thời hiện đại, lại có đá thần ngũ sắc có thể nâng cao chất lượng hoa màu, còn nắm trong tay kỹ năng kho tuyệt hảo của kiếp trước. Cô bé tám tuổi không ngừng khiêu chiến vị giác của người thời cổ đại, khiến hoa màu trở thành giống cho năng suất cao, trở thành thiếu nữ gây giống cây trồng nổi danh khắp thiên hạ.',
            'avatar' => 'ngon_tinh_7.jpg',
            'pro_att_id' => 'Cổ trang',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 20.000,
            'author' => 'Quỹ Họa Tình Vũ',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Mai trắng trong tuyết - Tập 3',
            'description' => 'Tiểu Duệ vẫn luôn đi tìm nguyên nhân thực sự vụ thảm sát Mai phủ năm xưa. Mọi thông tin đều hướng tới Dương Thiên Vũ là chủ mưu.
            Thái Khanh quận vương hé lộ nội tình việc đầu độc Mai gia và đại hoàng tử mới chính là thanh mai trúc mã của Tiểu Duệ. Còn Dương Thiên Vũ phong tư đĩnh đạc, tư chất hơn người nhưng thực chất chỉ là kẻ máu lạnh và lợi dụng Tiểu Duệ.
            Cuộc đối đầu giữa quân Huyền Vũ và Thiên Tước thực chất là mưu đồ thanh trừ cướp ngôi nội bộ trong triều đình Huyền Vũ. Thái Khanh quận vương một nhân vật bí ẩn, cũng là người mà Tiểu Duệ đặt niềm tin để rồi giáng đòn chí mạng về phía Dương Thiên Vũ.
            Tiểu Duệ đi tìm chính nghĩa hay chỉ là con cờ trong mưu đồ chính trị, thanh trừ phe phái. Chuyện tình Tiểu Duệ và Dương Thiên Vũ có thật là chân ái?',
            'avatar' => 'ngon_tinh_8.jpg',
            'pro_att_id' => 'Cổ trang',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 20.000,
            'author' => 'Nhóm 4.0',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Mai trắng trong tuyết - Tập 2',
            'description' => 'Tiểu Duệ và Dương Thiên Vũ thành hôn, chưa được mấy ngày mật ngọt bình yên, đã phải đối diện với cục diện đất nước hỗn loạn, thù trong giặc ngoài vây khốn. Cùng lúc đó, cái chết bí ẩn của Dung Phi đã hé lộ góc khuất chốn hậu cung.
            Tiểu Duệ ngày đêm hỗ trợ Dương Thiên Vũ cứu bách tính lầm than, dẹp yên quân giặc. Đồng thời, nàng bí mật thu thập tư liệu liên quan tới vụ thảm sát Mai phủ năm xưa. Nắm trong tay thông tin tuyệt mật, Tiểu Duệ đau lòng khi biết được sự thật về biến cố của gia môn.
            Tiểu Duệ sợ hãi khi nhìn rõ trùng trùng lớp lớp mưu mô chốn vương quyền. Nàng phải lựa chọn thế nào giữa mối thù gia tộc và vận mệnh quốc gia? Mối tình đẹp tựa thần tiên của Tiểu Duệ và Dương Thiên Vũ có bị cường quyền, danh lợi hủy hoại?',
            'avatar' => 'ngon_tinh_9.jpg',
            'pro_att_id' => 'Cổ trang',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 20.000,
            'author' => 'Nhóm 4.0',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Uông xưởng công - Tập 1',
            'description' => 'Năm Thái Ninh thứ năm, vào ngày sinh nhật bốn mươi tuổi của lão thái quân nhà họ Cố - dì ruột của đương kim hoàng thượng, Thiếu Phủ Giám và quan viên trong triều đưa tới rất nhiều lễ vật quý báu. Lão thái quân nhìn số quà tặng đó mà hoa cả mắt, sau đó ngất đi… và quay trở lại hai mươi lăm năm trước, khi nàng vẫn còn là Diệp Tuy – Lục cô nương nhà họ Diệp ở Tùng Dương.
            Kiếp trước Diệp Tuy đã trải qua một cuộc sống khổ sở. Nàng bị ngã ngựa hôn mê ba ngày ba đêm, gián tiếp ảnh hưởng đến tiền đồ của anh trai nàng, khiến cho cuộc sống sau này của anh trai cũng cơ cực. Sau khi nàng được gả vào nhà họ Cố, cha mẹ nàng bị hại chết. Chị gái nàng mang long thai cũng phải chịu những tranh đấu trong cung mà chết sớm.
            Có thêm một cơ hội, Diệp Tuy thầm quyết tâm sẽ không để bất kì bi kịch nào kiếp trước được lặp lại…',
            'avatar' => 'ngon_tinh_10.jpg',
            'pro_att_id' => 'Cổ trang, Trùng sinh',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 20.000,
            'author' => 'Bình Bạch Huynh',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Mai trắng trong tuyết - Tập 1',
            'description' => 'Dương Thiên Vũ là một vương gia thâm tình phong tư đĩnh đạc, tiêu sái ôn nhu, đặc biệt luôn mang trong lòng hình bóng người con gái từ thuở thanh mai.
            Tiểu Duệ là cô nương xinh đẹp thông minh, đã mất đi ký ức sau một biến cố lớn của gia môn.
            Hai năm sau, họ gặp lại nhau trong niềm hạnh phúc vô bờ của Dương Thiên Vũ và sự ngỡ ngàng của Tiểu Duệ. Cả hai tiếp tục trải qua những tháng ngày ngọt ngào dẫu Tiểu Duệ không nhớ gì về vương gia.
            Liệu tình yêu của Thiên Vũ có lay động được trái tim Tiểu Duệ? Và Tiểu Duệ có tìm lại được ký ức năm xưa?',
            'avatar' => 'ngon_tinh_11.jpg',
            'pro_att_id' => 'Cổ trang',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 20.000,
            'author' => 'Nhóm 4.0',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Nhất sinh nhất thế: Tiếu thương khung - Tập 1',
            'description' => 'Yêu Vật - nữ sát thủ lắm tài nhiều tật của thế kỷ 21 trong một lần thực hiện nhiệm vụ, chỉ vì thói mê trai mà bỗng dưng xuyên không về cổ đại, nữ giả nam trở thành Lạc Tử Dạ - vị thái tử nổi danh háo sắc của hoàng triều Thiên Diệu.
            Vừa đến cổ đại, nàng đã bị phạt trượng vì... mạo phạm Hộ quốc tướng quân. Lạc Tử Dạ nổi điên mang theo lửa giận bừng bừng đi tìm tên tướng quân không biết thân biết phận đó để cho hắn một bài học. Ấy vậy mà, cơ duyên thế nào nàng lại đụng phải Nhiếp chính vương quyền cao chức trọng, đã thế còn ngang nhiên đắc tội hắn và thành công khơi dậy lửa giận trong lòng Nhiếp chính vương. Từ đây, những rắc rối liên tục xảy đến đối với Lạc tử Dạ, khiến cuộc đời làm Thái tử của nàng cũng vì vậy mà có sự biến hóa nghiêng trời lệch đất.
            Nghe nói cổ đại có nhiều mỹ nam, nghe nói mỹ nam ở đây nhiều không đếm xuể. Thế là Lạc Tử Dạ liền nhanh chóng thích ứng với chuyện xuyên không hoang đường này, thậm chí nàng càng hưng phấn hơn vì xung quanh nàng đâu đâu cũng là trai đẹp. Nàng tự nhủ, nếu đã đến đây rồi thì chấp nhận thôi, tận hưởng cuộc sống làm Thái tử có tiền có quyền, tiện thể hoàn thành giấc mộng ngắm trai đẹp của mình. Chính vì thói mê trai của mình mà Lạc Tử Dạ đã đắc tội không ít người, nhưng đồng thời cũng vô tình khiến một số người sống trong đau đớn, giày vò bởi suy nghĩ lệch lạc về xu hướng giới tính.
            Hộ quốc tướng quân tuấn tú yêu dị, nàng liền năm lần bảy lượt tán tỉnh, gạ gẫm hắn. Công tử Doanh Tần của Tương Tư Môn yêu mị thế kia, nàng không thể cầm được lòng mình liền không màng nguy hiểm mà lấy lòng hắn, dụ dỗ hắn. Còn Nhiếp chính vương mà nàng đắc tội, kệ hắn, sau này tránh xa ra một chút là được. Cái gì? Nhiếp chính vương là mỹ nam? Thật sự là mỹ nam? Cái gì?? Đệ nhất mỹ nam của Thiên Diệu lại là Nhiếp chính vương?
            Nhưng nàng đã đắc tội với Nhiếp chính vương, làm sao để khiến hắn nguôi giận? Làm sao để hắn có hảo cảm với mình đây?
            Những tình tiết vô cùng hài hước, hấp dẫn sẽ có trong tác phẩm ngôn tình cổ trang dài kỳ Nhất sinh nhất thế: Tiếu thương khung - tác giả Quân Tử Giang Sơn.',
            'avatar' => 'ngon_tinh_12.jpg',
            'pro_att_id' => 'Cổ trang, Xuyên không',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 20.000,
            'author' => 'Quân Tử Giang Sơn',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Nhặt được vương phi tham tiền - Tập 1',
            'description' => 'Hạ Sơ Thất – bác sỹ quân y quân hàm Trung úy trong bộ đội đặc công, chỉ vì lấy trộm chiếc gương gỗ đào của một người bạn mà xuyên tới vùng nông thôn ở một triều đại cổ xưa nào đó. Vừa mở mắt ra, chưa kịp hoàn hồn thì đã bị… dìm lồng heo trôi sông.
            Đang oán thán vì cái thế giới cổ đại chẳng có một anh đẹp trai nào, Hạ Sơ Thất bắt gặp một người đàn ông dung mạo tuấn tú uy nghiêm, vai rộng, eo hẹp, khung xương cân đối, ngoại hình ngang tàng càng khiến người ta thèm nhỏ dãi… Nàng cứu hắn một mạng, thế mà hắn còn quỵt tiền chữa bệnh của nàng.
            Nếu biết tên đàn ông ngang ngược ở bờ sông đó là đương kim Thập Cửu Vương gia Triệu Tôn, người được mệnh danh là “Diêm Vương máu lạnh” thì có đánh chết nàng cũng không dám đắc tội với hắn. Tội cũng đã phạm, hắn cũng đã biết tung tích của nàng, Hạ Sơ Thất đành phải chịu bị hắn xoay vòng vòng như một con rối…',
            'avatar' => 'ngon_tinh_13.jpg',
            'pro_att_id' => 'Cổ trang, Xuyên không, Trùng sinh',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 20.000,
            'author' => 'Tự Cẩm',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Bổ Thiên Ký - Tập 1',
            'description' => 'Vinh Tuệ Khanh đang sống yên ổn cùng cha mẹ và ông nội tại một sơn thôn hẻo lánh trên núi Lạc Thần. Bất chợt biến cố nổi lên, cha và ông cô bị thuộc hạ của Vương gia Ngụy Nam Tâm - người tu chân cấp bậc Kim Đan giết chết, còn mẹ cô bị ông ta bắt đi.
            Nhờ cơ duyên mà Vinh Tuệ Khanh có linh căn nhưng lại bị Đóa Linh phu nhân bắt về để cướp đi linh căn của cô.
            Vinh Tuệ Khanh phải làm sao để giải cứu chính mình, giết chết kẻ thù để cứu mẹ và từng bước đi lên con đường tu tiên đầy trắc trở gian nan?...
            Dừng!
            Sự thật là...
            Con đường tu tiên thật gập ghềnh, ngoài những thứ không thể thiếu như công pháp, tố chất, cơ duyên, linh căn thì còn phải đối mặt với sự nghịch tập của các nữ phụ xuyên không, trọng sinh từng bị làm bia đỡ đạn.
            Điều này khiến người làm nữ chính như Vinh Tuệ Khanh cảm thấy áp lực rất lớn...
            Ông trời chết tiệt kia, sao lắm lỗ hổng thế chứ!!!
            "Vá trời" không tốn tiền hả???',
            'avatar' => 'ngon_tinh_14.jpg',
            'pro_att_id' => 'Cổ trang, Xuyên không, Trùng sinh, Huyền ảo',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 35.000,
            'author' => 'Hàn Vũ Ký',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Giang sơn bất hối (Tập 1)',
            'description' => 'Nhan Phá Nguyệt suốt đời này chẳng quên, đêm đó đôi mắt chàng đã mù, thương tích đầy mình, nhưng vẫn cố chấp cõng nàng, chạy điên cuồng trong sương mù lạnh lẽo. Khi cùng đường tuyệt lộ, chàng cất tiếng cười lớn, tiếng cười chấn động cả núi rừng:
            - Anh hùng trong thiên hạ tề tựu tại đây chỉ để làm ô nhục sự trong sạch của nàng. Hôm nay tại hạ sẽ vì nàng mà táng mạng, xin được lãnh giáo chư vị vài chiêu.
            Chàng ôm nàng, lấy sức một mình để chống lại trăm người, đao thương chém xuống như tuyết rơi.',
            'avatar' => 'ngon_tinh_15.jpg',
            'pro_att_id' => 'Cổ trang',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 35.000,
            'author' => 'Đinh Mặc',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Ai là mẹ anh',
            'description' => 'Nhan Phá Nguyệt suốt đời này chẳng quên, đêm đó đôi mắt chàng đã mù, thương tích đầy mình, nhưng vẫn cố chấp cõng nàng, chạy điên cuồng trong sương mù lạnh lẽo. Khi cùng đường tuyệt lộ, chàng cất tiếng cười lớn, tiếng cười chấn động cả núi rừng:
            - Anh hùng trong thiên hạ tề tựu tại đây chỉ để làm ô nhục sự trong sạch của nàng. Hôm nay tại hạ sẽ vì nàng mà táng mạng, xin được lãnh giáo chư vị vài chiêu.
            Chàng ôm nàng, lấy sức một mình để chống lại trăm người, đao thương chém xuống như tuyết rơi.',
            'avatar' => 'ngon_tinh_16.jpg',
            'pro_att_id' => 'Cổ trang, Hiện đại',
            'pro_cate_id' => 'Ngôn Tình',
            'price' => 35.000,
            'author' => 'Tựu Mộ',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Cuộc chiến công nghệ số',
            'description' => 'Thế giới chúng ta đang sống là một mô hình hóa của màu sắc, âm thanh hay mùi vị..., tất cả đều hòa quyện vào nhau thành một chỉnh thể thống nhất. Tuy nhiên, thế giới kỹ thuật số được mở ra trước mắt chúng ta qua những chiếc máy vi tính thì lại hoàn toàn khác: nó là nhị phân, tắt hay bật, có hoặc không. Sự ra đời của những chiếc máy tính cá nhân phù hợp với túi tiền của người dân vào những năm 1990 cùng với sự xuất hiện của mạng Internet vào khoảng những năm 1970 đã bắt đầu hình thành những lĩnh vực kinh doanh hoàn toàn mới – ví dụ tiêu biểu là Yahoo, một trang wed chuyên mang tới những tin tức nóng hổi được cập nhập liên tục tới từng phút, thông tin và dự báo về thời tiết, cùng dịch vụ thư điện tử miễn phí.
            Có ba công ty đã bị cuốn vào vòng xoáy của sự thay đổi này là: Apple, Microsoft và Google. Và ba công ty này vốn khác nhau hoàn toàn. Tính đến thời điểm cả ba công ty này bắt đầu tham gia vào trận chiến kỹ thuật số thì một trong số đó là một doanh nghiệp với thời hoàng kim đang dần chìm vào quá khứ, một bên thì là công ty đang dẫn đầu thế giới về lĩnh vực máy tính và kinh doanh, và một bên nữa mới chỉ chập chững bước ra từ một ý tưởng tuyệt vời của hai chàng sinh viên xuất chúng.
            Từ đó, các công ty ấy liên tục tranh đấu kịch liệt với nhau rất nhiều lần để tranh giành quyền kiểm soát từng lĩnh vực một của thế giới kỹ thuật số. Vũ khí của họ là những phần cứng, phần mềm liên tục được cải thiện, cũng như những chiến dịch quảng cáo rầm rộ. Thứ được đặt lên bàn cân lúc này là danh tiếng của họ, và cũng chính là tương lai của chúng ta.',
            'avatar' => 'bi_quyet_kinh_doanh_1.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh',
            'pro_cate_id' => 'Sách nói',
            'price' => 26.000,
            'author' => 'Charles Arthur',
            'pro_pub_id' => 'Đang Cập Nhật',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Telesales - Tiếp thị bán hàng qua điện thoại',
            'description' => 'Sách nói này sẽ hết hạn vào ngày 27/10/2019, quý độc giả vui lòng nghe sách trước 27/10/2019.
            Đây là bản tóm tắt của sách Telesales - Tiếp thị bán hàng qua điện thoại. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Nghệ thuật tiếp cận khách hàng qua điện thoại đòi hỏi sự nhạy cảm trong lắng nghe, khéo léo, tinh tế trong trình bày và bất ngờ trong tạo cảm xúc.
            Xuất hiện vào khoảng thập niên 70 của thế kỷ trước tại Bắc Mỹ, châu Âu, châu Đại dương, tiếp thị bán hàng qua điện thoại (Telesales) cho phép nhân viên tiếp cận, tìm hiểu nhu cầu và tư vấn cho khách hàng các sản phẩm và dịch vụ thông qua điện thoại mà không cần phải gặp mặt.
            Nhiều năm trở lại đây, tiếp thị bán hàng qua điện thoại được các doanh nghiệp tại Việt Nam áp dụng rộng rãi và trở nên phổ biến. Tuy nhiên, không phải công ty nào cũng hiểu rõ về hình thức tiếp thị này để vận dụng linh hoạt và hiệu quả, cũng như không phải khách hàng nào cũng vui vẻ chấp nhận những cuộc điện thoại chào mời của các công ty. Từng là chuyên gia nhiều năm kinh nghiệm trong lĩnh vực tiếp thị bán hàng tại các ngân hàng, tác giả Bùi Xuân Phong sẽ đem đến cho độc giả, những kiến thức tổng quan về mô hình này và các giải pháp cho các tình huống mà nhân viên tiếp thị bán hàng qua điện thoại phải đối mặt.
            Ngoài việc cung cấp những thông tin chi tiết về mô hình kinh doanh, cơ cấu vận hành cũng như các loại trang thiết bị cần thiết của kênh tiếp thị bán hàng qua điện thoại tác giả cũng đề cập đến việc phân tích tâm lý của khách hàng. Hiểu rõ tâm lý khách hàng có thể xóa bỏ được khoảng cách vô hình giữa người tiếp thị bán hàng qua điện thoại và người mua, thuyết phục khách hàng lắng nghe và mua sản phẩm.
            Telesales -Tiếp thị bán hàng qua điện thoại là cuốn sách mang đến cho độc giả cái nhìn tổng thể về ngành tiếp thị bán hàng qua điện thoại, và cuốn cẩm nang cho các bạn trẻ đang công tác trong ngành nghề hứa hẹn rất phát triển ở Việt Nam nhưng cũng rất áp lực và thử thách này.',
            'avatar' => 'bi_quyet_kinh_doanh_2.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Kinh doanh, Marketing - Bán hàng',
            'pro_cate_id' => 'Sách nói',
            'price' => 24.000,
            'author' => 'Bùi Xuân Phong',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] - Bí mật phía sau điện toán đám mây',
            'description' => 'Đây là bản tóm tắt của sách Bí mật phía sau điện toán đám mây. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Marc Benioff là người sáng lập, chủ tịch và CEO của Salesforce.com, một công ty về công nghệ điện toán đám mây.  Ông là người có công biến công nghiệp phần mềm bằng cách sử dụng Internet để "cải cách" lại cách chương trình phần mềm được thiết kế và phân phối.
            Bí mật phía sau điện toán đám mây, Marc Benioff mang đến cho độc giả cái nhìn rõ nét hơn về những chiến lược hàng đầu giúp Salesforce.com trở thành một trong những doanh nghiệp thành công nhất hiện nay. Cuốn sách giúp bạn tập trung vào tầm nhìn, tư duy khác biệt và quản lý doanh nghiệp hiệu quả hơn - điều đó có thể thay đổi sự nghiệp cũng như cuộc sống của bạn.
            Ở Việt Nam, "điện toán đám mây" đang dần trở nên thông dụng dù việc áp dụng vào thực tế vẫn còn khiêm tốn. Đưa việc kinh doanh theo phương thức "điện toán đám mây" ở Việt Nam sẽ là cuộc cách mạng lớn trong ngành công nghệ thông tin. Hy vọng lịch sử phát triển của Salesforce.com sẽ là một cú huých lớn để thay đổi tư duy của người sử dụng Việt Nam và là động lực cho các tài năng trong giới công nghệ thông tin Việt Nam trong việc xây dựng và phát triển các ứng dụng công nghệ thông tin trên nền tảng "điện toán đám mây".',
            'avatar' => 'bi_quyet_kinh_doanh_3.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Kinh doanh, Kinh doanh tổng hợp',
            'pro_cate_id' => 'Sách nói',
            'price' => 27.000,
            'author' => 'Marc Benioff',
            'pro_pub_id' => 'NXB Đại Học Kinh Tế Quốc Dân',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Dẫn dắt sếp',
            'description' => 'Tóm tắt cuốn sách "Dẫn Dắt Sếp": Bạn đã sẵn sàng tạo một bước nhảy vọt từ vị trí khiêm tốn hiện tại (chuyên gia kỹ thuật, nhà sản xuất) tới vị trí lãnh đạo có tầm ảnh hưởng lớn, gây được sự chú ý và được mọi người tán dương chưa?
            Dẫn dắt sếp sẽ chỉ cho bạn cách thực hiện điều đó. Cuốn sách vô giá này sẽ giúp bạn rèn luyện khả năng cân bằng, sự bền bỉ, ý chí và niềm đam mê phong cách lãnh đạo mang tên "quản lý cấp trên". Phong cách đó được hình thành từ những nhà quản lý cấp trung, vị trí đòi hỏi phải gây được ảnh hưởng tới sếp, đồng nghiệp và cả cấp dưới, những người có tác động tích cực đến sự cam kết cũng như những đóng góp của bạn. Quản lý cấp trên, tức là phải xây dựng được phẩm chất khiến người khác luôn khâm phục và được đánh giá là liêm chính, nghị lực, cảm thông, và đặc biệt là khả năng tư duy tổng hợp...
            Cuốn sách chứa đựng kiến thức lãnh đạo tinh tế và những chiến lược thiết yếu nhằm củng cố niềm tin cho mọi người để mang lại kết quả tốt đẹp cho bản thân, nhân viên và sếp của bạn.
            "Trong Dẫn dắt sếp, phong cách độc đáo và kiến thức uyên bác của John Baldoni đã mang lại một cái nhìn mới mẻ cho chủ đề này nói riêng và vấn đề quản lý nói chung." ‒ Eric Hellweg, Editorial Managing Director, Harvard Business.org
            "Cuốn sách chứa đựng những lời khuyên sâu sắc, hữu ích và riêng biệt cho những ai sắp trở thành lãnh đạo trong tương lai" - WashingtonPost.com
            "Bằng cách tạo ra chiến thuật và tập trung vào kinh nghiệm thực tiễn, nhà quản lý có thể mang đến những thay đổi tích cực trong kỹ năng lãnh đạo của mình. Dẫn dắt sếp là hướng dẫn cho tất cả những ai muốn khôi phục niềm tin với sếp và dẫn dắt nhóm của mình đạt được những thành quả lớn trong công việc - Eric Harvey, người sáng lập và Chủ tịch Walk the Talk. Co.',
            'avatar' => 'bi_quyet_kinh_doanh_4.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 27.000,
            'author' => 'John Baldoni',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Để trở thành người bán hàng xuất sắc',
            'description' => 'Mọi công ty nếu muốn hoạt động hiệu quả, phát triển lâu dài, hoặc mở rộng quy mô hoạt động đều cần phải có nguồn thu nhập ổn định. Và nhân viên bán hàng chính là người đem nguồn thu nhập đó về cho công ty. Họ là người giới thiệu sản phẩm hay dịch vụ đến khách hàng, thu hút khách hàng tiềm năng, duy trì khách hàng hiện tại, đồng thời tạo dựng uy tín và thể hiện vị thế cho công ty. Trong một môi trường kinh doanh luôn cạnh tranh mạnh mẽ, việc làm cho sản phẩm, dịch vụ của bạn trở nên nổi bật và thu hút khách hàng so với vô vàn sản phẩm hay dịch vụ của đối thủ là điều không dễ dàng. Chính vì vậy, đội ngũ nhân viên bán hàng là nguồn tài sản vô cùng quý giá của công ty.
            Cuốn Để trở thành người bán hàng xuất sắc trình bày những bí quyết giúp bạn trở thành người bán hàng xuất sắc. Đây là một cẩm nang hướng dẫn có giá trị cho những ai mới khởi đầu sự nghiệp kinh doanh cũng như muốn tỏa sáng trong lĩnh vực bán hàng. Với những lời khuyên thiết thực và những ví dụ minh họa thực tế được tác giả Jeffrey J. Fox chọn lọc trong quá trình kinh doanh của chính mình, bạn sẽ biết cách nâng nghệ thuật bán hàng lên một tầm cao mới.
            Hy vọng với cuốn sách Để trở thành người bán hàng xuất sắc, bạn sẽ tìm thấy nhiều điều bổ ích có thể vận dụng vào công việc bán hàng cũng như vươn đến những nấc thang thành công khác trong sự nghiệp kinh doanh của bạn.',
            'avatar' => 'bi_quyet_kinh_doanh_5.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 27.000,
            'author' => 'Jeffrey J. Fox',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Cho khế nhận vàng',
            'description' => 'Thành công là điều mà tất cả mọi người đều mong muốn. Có rất nhiều cách để thành công và mỗi người sẽ có một cách cho riêng mình. Sách về bí quyết thành công có rất nhiều, nhưng hầu hết các bí quyết ấy lại không có một bí quyết rất đặc biệt, là "Cho đi".
            Ít ai đồng ý và nhận ra rằng, ta sẽ thành công khi biết cho đi, biết giúp đỡ người khác cùng thành công, khi ấy ta thành công hơn cả thành công. Nhưng thường, ta chỉ thấy rằng, những người giúp đỡ người khác thường chịu thiệt thòi, chẳng những không được đáp lại mà còn nhận nhiều sự phiền hà về bản thân mình. Cuốn sách Cho khế nhận vàng của tác giả Adam Grant sẽ giúp bạn đọc có được cái nhìn khác về cho và nhận, nhất là trong lĩnh vực kinh doanh, một lĩnh vực mà khái niệm “Cho” chưa được thừa nhận như là một cách để thành công.
            "Cho khế nhận vàng" của Adam Grant giúp bạn đọc có cái nhìn khác về cho và nhận, nhất là trong lĩnh vực kinh doanh - khái niệm "Cho" chưa được thừa nhận là một cách để thành công.
            Xuyên suốt nội dung của cuốn sách, bạn đọc sẽ được biết những trường hợp thành công đến từ mọi thành phần trong xã hội, bao gồm: các chuyên viên cố vấn, bác sĩ, luật sư, kỹ sư, nhân viên bán hàng, giáo viên, kế toán viên, nhà văn và vận động viên thể thao. Điểm chung là họ đều theo đuổi ý tưởng tạo dựng thành công cho bản thân trước, rồi sau đó quay lại giúp đỡ những người khác, qua đó chứng minh rằng, những người biết cho đi trước chắc chắn là những người nằm ở vị trí thuận lợi nhất để nhận lấy thành công sau này.
            Qua cuốn sách Cho khế nhận vàng, tác giả muốn chứng minh cho bạn đọc thấy rằng, chúng ta đã đánh giá thấp khả năng thành công của những người sẵn sàng cho đi. Tuy thường bị mỉa mai là những kẻ ngốc nghếch và vô dụng, những người này hóa ra lại thành công nhất. Nhằm tìm ra căn nguyên thành công của họ, tác giả đã khảo chứng một số câu chuyện và trường hợp tiêu biểu để hiểu bằng cách nào mà việc cho đi lại có hiệu quả và không rủi ro như suy nghĩ của chúng ta.
            Tác giả Adam Grant là giáo sư trẻ nhất tại Wharton, đồng thời được công nhận là giáo sư có thành tích ấn tượng nhất tại ngôi trường nổi tiếng này. Ông được Business Week bình chọn là một trong những giáo sư tiêu biểu nhất và cũng là một trong 40 giáo sư trẻ dưới 40 tuổi xuất sắc nhất thế giới. Vốn đa tài, anh là cựu giám đốc quảng cáo, cựu vận động viên nhảy cầu chuyên nghiệp và còn là một ảo thuật gia xuất sắc.',
            'avatar' => 'bi_quyet_kinh_doanh_6.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 27.000,
            'author' => 'Adam Grant',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Lãnh đạo và sự tự lừa dối',
            'description' => 'Trong một thời gian dài, vấn đề tự lừa dối đã trở thành đề tài thu hút sự chú ý của nhiều nhà tâm lý, triết gia và cả những học giả uyên thâm. Thế nhưng, điều đáng nói là cho đến nay, nhiều người trong chúng ta vẫn chưa thực sự quan tâm đến vấn đề này, bất chấp sự phổ biến cùng những tác động tiêu cực của nó. Vì thế, trong cuốn sách này, chúng tôi sẽ đề cập đến mức độ ảnh hưởng và đưa ra những giải pháp thiết thực để có thể giúp bạn thoát khỏi tình trạng này, cả trong quá trình lãnh đạo ở công sở lẫn trong cuộc sống gia đình.
            Sự tự lừa dối là cụm từ dùng để chỉ cách ứng xử khá phổ biến của nhiều người trước những vấn đề xảy ra trong cuộc sống. Nó khiến chúng ta không thể nhận ra nguyên nhân thật sự của mọi rắc rối mà mình đang vướng phải. Khi đó, tất cả những “giải pháp” mà ta có thể nghĩ đến chỉ càng khiến mọi thứ trở nên tồi tệ hơn mà thôi. Đó là lý do tại sao sự tự lừa dối lại thu hút sự quan tâm của nhiều nhà lãnh đạo đến vậy.
            Với hình ảnh chiếc hộp và cách thức chúng ta “tự nhốt mình” hay “thoát khỏi chiếc hộp” là điều bạn có thể nhận ra chính mình trong mọi mối quan hệ, cả trong môi trường công sở và những mối quan hệ gia đình. Không chỉ dừng lại ở đó, quyển sách còn đề cập tới vấn đề sâu xa hơn: nó đưa ra những giải pháp thiết thực để bạn có thể tự giải phóng mình ra khỏi “chiếc hộp” trong cách ứng xử với những người xung quanh, cũng như sự tự lừa dối với bản thân mình. Giải pháp này sẽ giúp các bạn giảm thiểu những mâu thuẫn, tăng thêm niềm hứng khởi, thúc đẩy tinh thần trách nhiệm và nâng cao khả năng đạt được thành công trong tổ chức của bạn. Hơn thế nữa, nó còn giúp bạn cảm thấy hài lòng và hạnh phúc hơn với những gì mình đang có.
            Những lần đối thoại giữa lãnh đạo cấp cao và nhân viên dưới quyền, những câu chuyện thực tế cùng sơ đồ, biểu mẫu minh họa cùng những phân tích kèm theo trong cuốn sách còn chúng ta có thể học được cách giúp người đối diện tự thoát ra khỏi chiếc hộp của mình để trở nên vui vẻ, có thể hiểu và chia sẻ hoàn cảnh, suy nghĩ của họ với chúng ta.',
            'avatar' => 'bi_quyet_kinh_doanh_7.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 27.000,
            'author' => 'Nhiều tác giả',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Đánh cắp ý tưởng',
            'description' => 'Những ý tưởng độc đáo thật sự hữu ích và thực tế mà bạn có thể đánh cắp để áp dụng nhằm nâng cao hiệu quả trong chiến lược Marketing, xây dựng thương hiệu và kinh doanh hiệu quả.
            “Các bạn độc giả Việt Nam thân mến!
            Tôi thật sự hy vọng các bạn sẽ yêu thích quyển “Steal These Ideas” được các bạn tôi tại First News xuất bản và phát hành. Mong rằng các bạn sẽ tìm thấy nhiều ý tưởng tuyệt vời có thể giúp công việc kinh doanh của mình thành công hơn. Quyển sách này hầu như chứa đựng tất cả những khía cạnh quan trọng của hai lĩnh vực marketing và thương hiệu, tôi hy vọng những bí quyết này sẽ giúp cho các bạn tiến về phía trước với những thành công rực rỡ hơn.”',
            'avatar' => 'bi_quyet_kinh_doanh_8.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 27.000,
            'author' => 'Steven Cone',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => '100 quy luật bất biến để thành công trong kinh doanh',
            'description' => 'Bất kỳ quy luật nào trong cuốn sách này cũng có thể giúp bạn tiết kiệm thời gian đáng kể cũng như giúp bạn nhận ra toàn bộ khả năng tiềm ẩn của mình. Những quy luật này cũng giống như những quy luật của vật lý, toán học, cơ khí hay điện tử. Chúng đã được thử nghiệm qua thời gian, được chứng minh và áp dụng vào thực tế. Mục đích cuốn sách không bàn đến sức khoẻ, gia đình, tình yêu, sự thăng trầm của số mệnh hay bất kỳ yếu tố nào tạo nên hạnh phúc và sự thoả mãn cá nhân mà hoàn toàn chỉ đề cập đến những quy luật còn mãi với thời gian để thành công trong kinh doanh.
            Cuốn sách này là kết quả của hơn 30 nghiên cứu, tìm tòi và trải nghiệm của tác giả Brian Tracy. Cuốn sách đã tập hợp những kiến thức, thông tin quý giá kết hợp với những giải thích chi tiết giúp bạn nắm vững những quy luật thành công trong kinh doanh. Khi kết hợp những quy luật này với cách tư duy và ra quyết định, hiệu quả làm việc của bạn sẽ trở nên tối ưu. Đặc biệt, cuốn sách sẽ rất hữu ích trong việc:
            Thu hút và duy trì người tài
            Sản xuất và kinh doanh được nhiều sản phẩm, dịch vụ.
            Kiểm soát chi phí hiệu quả
            Mở rộng kinh doanh theo quy mô và xu thế phù hợp
            Lợi nhuận tăng trưởng bền vững...',
            'avatar' => 'bi_quyet_kinh_doanh_9.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 27.000,
            'author' => 'Brian Tracy',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Nghệ thuật bán hàng bậc cao',
            'description' => 'Triết lý chứa đựng trong cuốn sách Nghệ thuật bán hàng bậc cao thật đơn giản: “Bạn có thể có được những tất cả mọi thứ trong cuộc sống nếu bạn biết giúp người khác đạt được điều họ muốn”, thậm chí còn đúng đắn và cần thiết hơn trong cuộc sống hiện nay so với thời kỳ khi cuốn Nghệ thuật bán hàng bậc cao được xuất bản lần đầu. Mục tiêu cuả một thương vụ là đảm bảo khách hàng nhận được giá trị tương xứng, nhưng nếu bạn mang đến cho khách hàng những giá trị còn cao hơn giá trị mà lẽ ra họ sẽ nhận được thì không những bạn đã có một thương vụ thành công mà bạn còn có thêm một khách hàng sẵn lòng giúp bạn có thêm nhiều khách hàng khác nữa.
            Trong cuốn sách kinh doanh này, bạn sẽ có cơ hội làm quen với nhiều người bán hàng sẵn sàng từ bỏ một thương vụ bởi họ biết rằng thương vụ đó không mang lại lợi ích tốt nhất cho khách hàng của mình. Khi đó, bán hàng trở nên giống như thi đấu thể thao, nhà vô địch quần vợt phải biết đánh bóng sao cho anh ta có thể đánh cú tiếp theo hiệu quả hơn, hay các tay gôn kỳ cựu cũng vậy. Nếu nhân viên bán hàng không quan tâm đến việc xây dựng và duy trì mối quan hệ tốt đẹp với khách hàng mà chỉ chăm chăm kiếm tiền từ túi người khác thì đảm bảo rằng họ sẽ nhanh chóng bị đào thải khỏi nghề này.
            Khi đọc cuốn sách Nghệ thuật bán hàng bậc cao, các bạn cần linh động áp dụng từng nguyên tắc hay nghiều nguyên tắc cùng lúc để phù hợp với sản phẩm của bạn cũng như yêu cầu của khách hàng. Cuốn sách bao gồm rất nhiều ví dụ minh hoạ và những câu chuyện thực tế, được viết theo lối kể chuyện tự nhiên, do vậy bạn cần phải chủ động học hỏi - chứ không chỉ đơn giản chỉ đọc nó mà thôi.',
            'avatar' => 'bi_quyet_kinh_doanh_10.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 27.000,
            'author' => 'Zig Ziglar',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Hẹn bạn trên đỉnh thành công',
            'description' => 'Hẹn bạn trên đỉnh thành công được xem như một cẩm nang sống với rất nhiều phần lý thuyết hữu dụng và cả những câu chuyện thực tế sinh động. Những ý tưởng và bí quyết trong cuốn sách này được rút ra từ kinh nghiệm, vốn sống và sự tích lũy những bài học trong kinh doanh của những con người từ thường dân cho đến các nhà lãnh đạo công ty hàng đầu thế giới. Vì thế, đọc cuốn sách này giúp độc giả học hỏi để phát triển bản thân từ những thực tế đã được kiểm chứng chứ không phải qua lý thuyết suông.
            Đây chính là đường lối thực dụng duy nhất để phát triển vì học mọi thứ bằng những chứng nghiệm cá nhân tất sẽ chẳng mấy kết quả mà lại tốn kém quá nhiều thì giờ và tiền bạc.
            Bạn có thể cầm sách lên đọc bất cứ trang nào cho tinh thần bạn được điểm tâm, đọc một chương cho tinh thần bạn được no thỏa hoặc đọc hết cả cuốn cho tinh thần bạn tìm ra một lối sống. Rồi bạn hãy đọc đi đọc lại, và nếu bạn đem những tư tưởng trong sách này ra áp dụng thì tôi sẽ “gặp bạn trên đỉnh thành công”.',
            'avatar' => 'bi_quyet_kinh_doanh_11.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 30.000,
            'author' => 'Zig Ziglar',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Nghĩ lớn để thành công',
            'description' => 'Nghĩ Lớn Để Thành Công của Donald J.Trump (được coi là ông trùm của các ông trùm bất động sản ở Mỹ), vì ông là ông trùm rất khác biệt nên ông đã viết nên một cuốn sách cũng hoàn toàn khác biệt.
            Hai trong số các doanh nhân thành đạt nhất thế giới đã tiết lộ bí quyết suy nghĩ lớn để đạt được những thành công ngoạn mục. Hãy áp dụng quan điểm của Donald để truyền cảm hứng cho chính bạn, nhằm phá vỡ những hạn chế của bản thân. Bạn luôn có hai lựa chọn, hoặc bằng lòng với những suy nghĩ bình thường như bao người khác hoặc có thể suy nghĩ lớn.
            Đây chắc chắn là một cuốn sách hay mà bạn phải đọc. Và nhất là khi bạn biết đến Donald J.Trump thì lại càng không thể bỏ qua. Một phong cách rất “Trump” - cuốn sách thúc đẩy động lực rất lớn. Những gì được truyền tải trong sách giúp bạn luôn luôn cảm thấy phấn khích về một người dám nghĩ, dám làm, cách ông ra mệnh lệnh cũng như cách ông động viên một ai đó.
            Chỉ từ những trang đầu tiên bạn đã phải “mê” cuốn sách tuyệt vời này rồi. Và sau khi kết thúc, có thể bạn sẽ còn muốn đọc đi đọc lại thêm nhiều lần nữa. Bởi cuốn sách có rất nhiều quy luật mà nếu nhận ra và ứng dụng, bạn có thể thay đổi cuộc đời mình. Đơn giản ngay từ lời chia sẻ đầu tiên đã chứa đựng rất nhiều điều tuyệt vời, thật sự tinh tuý mà lại đơn giản, dễ dàng ứng dụng.
            Hãy nghe ngay cuốn sách này khi bạn có thể, và đừng chần chừ gì cả. Bởi chỉ cần đọc cuốn sách này sớm hơn một chút, bạn đã có thể tạo nên sự khác biệt cho cuộc đời mình!',
            'avatar' => 'bi_quyet_kinh_doanh_12.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 50.000,
            'author' => 'Donald J.Trump',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Sức mạnh của sự khích lệ',
            'description' => 'Điều gì khiến ta quan tâm nhiều nhất trong cuộc sống, công việc và những mối quan hệ với người khác? Chúng ta luôn mong muốn có được những kết quả tốt nhất, thế nhưng, chúng ta lại thường có thói quen chỉ chú ý đến những khuyết điểm hơn là ưu điểm và mặt tích cực. Và chúng ta cũng có khuynh hướng chỉ trích, phê bình hơn là động viên, khích lệ. Nếu thế, những mối quan hệ của chúng ta sẽ như thế nào? Chắc chắn sẽ trở nên xấu đi! Trong những lúc chúng ta phải đối mặt với thất bại, lo lắng, bế tắc trong công việc, cuộc sống thì chính sự khích lệ, cảm thông sẽ là nguồn động viên lớn lao tiếp thêm nhiệt tình để chúng ta vượt qua những khó khăn mà tiếp tục theo đuổi mục tiêu. Tiến sĩ Ken Blanchard đã rút ra được kinh nghiệm quí báu đó khi làm việc với những người huấn luyện cá voi ở Công viên Thế giới Đại dương (Orlando, Florida) để rồi chia sẻ với bạn đọc trong cuốn sách nổi tiếng đầy cảm hứng và thú vị: Whale done!- Sức mạnh của sự khích lệ.
            Trong tác phẩm Whale done! - Sức mạnh của sự khích lệ, Ken Blanchard đã đưa ra phương pháp khích lệ những mặt tích cực để định hướng những hành vi chưa tốt của người khác. Để tăng hiệu quả công việc cũng như cải thiện các mối quan hệ, thay vì tạo ra những tình huống tiêu cực làm tinh thần người khác suy giảm, ông đã phát hiện ra phương pháp khích lệ, động viên con người phát huy khả năng, ý chí và sự tích cực trong ngôn từ, thái độ, hành vi. Bằng những nghiên cứu, trải nghiệm và quá trình thâm nhập thực tế trong suốt mười năm, tác giả đã đúc kết nên những kinh nghiệm quý báu và hữu ích: “Nếu ta mở lòng với mọi người bằng một thái độ sống tích cực thì ta sẽ nhận lại được những kết quả tích cực”, “Hãy nghĩ và đối xử với người khác theo cách mình muốn họ trở thành” v.v...
            Hãy luôn nhớ rằng, cách nhìn và thái độ đối xử tích cực của bạn với một người sẽ có tác dụng thay đổi người đó theo hướng tích cực, như bạn mong muốn. Chúc các bạn tìm thấy nhiều điều thú vị cho mình trong tập sách này.',
            'avatar' => 'bi_quyet_kinh_doanh_13.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 31.000,
            'author' => 'Ken Blanchard',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => '22 quy luật bất biến trong Marketing',
            'description' => 'Sự thành công trong kinh doanh hay của một thương hiệu phụ thuộc rất lớn vào cách tiến hành công tác Marketing. Một chương trình Marketing hiệu quả không phải chỉ cần đựơc lên kế hoạch đầy đủ, thực hiện đúng thời điểm và có nguồn tài chính thuận lợi mà còn phải tuân theo những qui luật Marketing. Cuốn sách 22 Quy Luật Bất Biến Trong Marketing trình bày những qui luật cơ bản có khả năng chi phối , quyết định quan trọng đến sự thành bại trong kinh doanh. Đây cũng là công trình tâm huyết của hai tác giả Al Ries và Jack Trout với nhiều năm nghiên cứu và trải nghiệm thực tế. Những quy luật này mang giá trị thực tiễn cao, dễ nắm bắt, vận dụng và nhanh chóng đưa bạn đến thành công và toả sáng trong vai trò là một nhà Marketing hiệu quả.
            Quy luật đầu tiên để đạt đựơc thành công trong Marketing là pải nắm bắt được những nội dung trình bày trong cuốn sách này. Với cách đặt vấn đề đơn giản và đều ứng dụng thực tiễn, đây thực sự là một cuốn cẩm nang hữu dụng, trong đó các quy luật marketing được chắt lọc một cách tinh tế, ngắn gọn và dễ hiểu...',
            'avatar' => 'bi_quyet_kinh_doanh_14.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 29.000,
            'author' => 'Jack Trout, Al Ries',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => '21 nguyên tắc vàng của nghệ thuật lãnh đạo',
            'description' => 'John C. Maxwell là một chuyên gia quốc tế về lĩnh vực lãnh đạo, một nhà hùng biện và một tác giả, người đã có 12 triệu bản sách được bán ra. Các tổ chức của ông đã đào tạo hơn 1 triệu nhà lãnh đạo trên toàn thế giới. Tiến sĩ Maxwell là người sáng lập Dịch vụ Quản lý Injoy và EQUIP. Mỗi năm ông nói chuyện với 500 công ty lớn nhất theo bình chọn của Fortune, các chính khách trên thế giới và nhiều tổ chức khác nhau như Viện Quân sự Hoa Kỳ ở Miền Tây và Đội bóng đá quốc gia. Ông cũng là tác giả của hơn 40 cuốn sách nổi tiếng thế giới, trong đó AlphaBooks chọn lọc và trân trọng giới thiệu các cuốn như: 21 nguyên tắc vàng của nghệ thuật lãnh đạo, 17 quy tắc bất biến của làm việc nhóm, Nghệ thuật lãnh đạo 360, Tài năng thôi chưa đủ.
            Với John C. Maxwell, có một hình mẫu chung cho nhà lãnh đạo đích thực, và các tác phẩm ông viết đều hướng về hình mẫu này. Triết lý về nghệ thuật lãnh đạo của ông được xây dựng trên niềm tin rằng các nguyên tắc nền tảng của nó là bất biến, có giá trị xuyên không gian, thời gian và bao trùm mọi lĩnh vực. Vì vậy, ông chắt lọc hơn 30 năm kinh nghiệm thực hành và giảng dạy thuật lãnh đạo vào 21 Nguyên tắc vàng của nghệ thuật lãnh đạo, những nguyên tắc mà, theo ông, mỗi nhà lãnh đạo cần vận dụng và thực hành với sự chủ động, linh hoạt, thường xuyên, để đảm nhiệm vai trò và vị trí của mình một cách toàn diện, đồng thời dẫn dắt người khác cùng đi đến thành công. 
            Không ai trở thành lãnh đạo sau khi đọc một cuốn sách. Song, 21 Nguyên tắc vàng của nghệ thuật lãnh đạo sẽ bật nút khai mở cho những phẩm chất lãnh đạo vốn tiềm ẩn trong mỗi người, để chúng được sử dụng và phát triển vì một môi trường chung hòa hợp và nhân văn. Đó cũng là xuất phát điểm không thể bỏ qua đối với những nhà lãnh đạo đang mong muốn tự đổi mới bằng cách:
            -   Tìm điểm tham chiếu cho trải nghiệm của mình; 
            -   Tìm cơ sở để phân tích và mài rũa kỹ năng;
            -   Xây dựng tầm nhìn; 
            -    Xác định những khả năng hành động cho phép bản thân phát triển cao hơn, xa hơn…
            Hãy đi theo những nguyên tắc của John Maxwell, và mọi người sẽ đi theo bạn!',
            'avatar' => 'bi_quyet_kinh_doanh_15.jpg',
            'pro_att_id' => 'Bí quyết kinh doanh, Quản trị - Lãnh đạo',
            'pro_cate_id' => 'Sách nói',
            'price' => 22.000,
            'author' => 'John C. Maxwell',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => '10 nghịch lý cuộc sống',
            'description' => '"Cuộc sống chúng ta luôn có những nghịch lý - những người bản lĩnh và cao thượng luôn biết chấp nhận và vượt lên những nghịch lý đó."
            Tác phẩm nổi tiếng Anyway - 10 nghịch lý cuộc sống của Tiến sĩ Kent Keith đã trở thành một cuốn sách kinh điển và được bạn đọc trên thế giới yêu thích về sự độc đáo và thẳng thắn về trải nghiệm cuộc sống. Cuốn sách liên tục được bình chọn là một trong những tác phẩm bán chạy nhất nhiều năm liền và đã được dịch sang nhiều ngôn ngữ.
            Điểm đặc biệt nhất của Anyway chính là ý nghĩa sâu sắc và thực tế của tác phẩm đã tác động đến nhiều đối tượng độc giả khác nhau, mang lại những khoảng lặng cần thiết để suy nghĩ về một cách sống cao thượng và hế mình. Tác giả Kent Keith chính là một minh chứng cụ thể và xác thực cho cách sống này. Ông đã viết và dành cả cuộc đời mình để chứng minh cho những chân lý đó.',
            'avatar' => 'hat_giong_tam_hon_1.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Kinh doanh, Kiến thức kinh tế',
            'pro_cate_id' => 'Sách nói',
            'price' => 34.000,
            'author' => 'Kent M. Keith',
            'pro_pub_id' => 'Đang Cập Nhật',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Sức mạnh của điểm dừng - Tập 2',
            'description' => 'Từ trải nghiệm của bản thân, Terry Hershey, diễn giả nổi tiếng và người chủ trì những buổi tu dưỡng tinh thần, hiểu rằng luôn có cái giá phải trả nếu chúng ta không thường xuyên dành thời gian chỉ đơn giản là để dừng lại – tạm dừng các hoạt động, trân trọng khoảng thời gian tĩnh tại, và nhận ra ý nghĩa sâu xa của những khoảnh khắc bình dị trong cuộc sống.
            Vì thế, ông biên soạn Sức mạnh của điểm dừng thành 8 phần theo mùa với tâm niệm: “Tôi chia các câu chuyện theo mùa bởi vì rất nhiều người thích tuân theo trình tự các mùa trong năm. Và tôi cũng phân loại các câu chuyện theo kiểu tâm trạng hay các giai đoạn nội tâm. Hãy chọn và sử dụng chúng theo cách bạn thấy phù hợp. Cuốn sách này là của bạn, nó giúp bạn tạm nghỉ bất kể bạn đang ở mùa nào hay đang mang tâm trạng nào.” Qua 52 chương ngắn trong 8 phần – mỗi chương bao gồm câu trích dẫn, câu chuyện truyền cảm hứng hoặc gợi ý cho hoạt động suy nghiệm và thực hành – chúng ta sẽ nhận ra giá trị thâm thúy của những giây phút tĩnh tại hàng ngày, từ cuộc sống cân bằng.',
            'avatar' => 'hat_giong_tam_hon_2.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Nghệ thuật sống, Kỹ năng',
            'pro_cate_id' => 'Sách nói',
            'price' => 34.000,
            'author' => 'Terry Hershey',
            'pro_pub_id' => 'NXB Tổng hợp thành phố HCM',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Hạt giống tâm hồn - Đừng từ bỏ ước mơ',
            'description' => '"Cuốn sách dành cho những con người đang gặp khó khăn, đang trăn trở, tìm cách vượt qua những thử thách tinh thần, niềm tin cuộc sống, để đạt được ước mơ, hoài bão của mình".
            "Cho dù có lúc ước mơ bị che mờ, bị vùi dập trong những thử thách của cuộc sống khiến bạn không còn muốn nghĩ về nó nữa – Nhưng bạn đừng bao giờ từ bỏ nó, vì đó chính là ý nghĩa thực sự của cuộc sống, là điều cần thiết tạo nên sức mạnh cho bạn".
            Trong cuộc sống chúng ta, ai cũng có một ước mơ cho một ngày mai thật đẹp, dù bình dị hay phi thường – đó có thể là ước mơ rất đỗi giản dị của một cậu bé tật nguyền được bước đi bình thường như bao trẻ khác, hoặc đó là ước mơ tìm được việc làm mà mình yêu thích của một cô gái thất nghiệp, ước mơ trở thành nhạc sĩ nổi tiếng của một cậu bé không còn nhìn thấy ánh sáng, hoặc là những ước mơ chinh phục, vượt qua những thử thách, vươn lên để khẳng định và đạt được những gì mình ao ước. Những ước mơ đáng quý, đáng trân trọng đó luôn là niềm hy vọng, nguồn động lực cho mỗi người để sống, để cảm nhận và hướng đến tương lai.
            Nhưng cuộc sống luôn tìm ẩn những khó khăn trở ngại và thử thách bất ngờ – con đường đi đến những ước mơ ấy không hề bằng phẳng. Và dù không hề mong muốn, đôi khi, chúng ta phải đối mặt với tận cùng của khổ đau, thất bại. Khi đó, nếu giữ mình, đừng gục ngã, chúng ta sẽ tìm lại được chính mình và nhận ra ý nghĩa sâu sắc của từng khoảnh khắc cuộc sống.
            Đừng bao giờ từ bỏ ước mơ gồm những câu chuyện chân tình, giản dị từ những con người bình dị sẽ giúp bạn cảm nhận, tìm lại giá trị của bản thân và ý nghĩa cuộc sống. Qua những sự kiện xúc động, bất ngờ, các câu chuyện đều nhấn mạnh đến tinh thần vượt lên, tìm được cảm hứng cuộc sống và sức mạnh tinh thần. Bạn có thể bắt gặp hình ảnh của chính mình hoặc của những người xung quanh để suy gẫm, khám phá và tìm ra lời giải cho cuộc sống của mình.',
            'avatar' => 'hat_giong_tam_hon_3.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Nghệ thuật sống, Kỹ năng',
            'pro_cate_id' => 'Sách nói',
            'price' => 22.000,
            'author' => 'Nhiều tác giả',
            'pro_pub_id' => 'NXB Tổng hợp thành phố HCM',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Hồn ma đêm giáng sinh 1',
            'description' => 'Câu chuyện khắc họa sống động nhân vật Ebenezer Scrooge keo kiệt, ưa gắt gỏng; tuy nhiên đã có những chuyển biến lớn về tư tưởng, tình cảm và nhận thức về giá trị nhân bản sau cuộc ghé thăm của những “vị khách siêu nhiên” là Hồn ma vất vưởng Jacob Marley và ba Hồn ma của Giáng sinh Quá khứ, Hiện tại và Tương lai, để cuối cùng ông trở thành người mang giá trị nhân ái của Giáng sinh lan tỏa đến mọi người.
            Bản thân Ebenezer Scrooge là hiện thân của mùa đông khắc nghiệt. Song mùa đông nào rồi cũng phải qua đi để mùa xuân vui tươi rộn ràng trải rộng nơi nơi. Vì vậy trái tim của Scrooge dù thật băng giá, hà khắc nhưng trong sâu thẳm vẫn lánh lánh ngọn lửa thiện ý ấm áp tình người, và càng lúc càng bùng lên mạnh mẽ, làm tan chảy lớp nhận thức ích kỷ chai lạnh khi những Hồn ma giúp ông lần giở từng trang đời mình.',
            'avatar' => 'hat_giong_tam_hon_4.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Truyện dài - Tiểu thuyết, Văn học',
            'pro_cate_id' => 'Sách nói',
            'price' => 31.000,
            'author' => 'Charles Dickens',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Muối của tình yêu',
            'description' => 'Liệu Halley có làm được điều đó hay không khi cô vốn nhút nhát và đã quen có Scarlett bênh vực, che chở? Tình bạn của họ rồi sẽ đi về đâu và nhất là Scarlett sẽ như thế nào sau cái chết của Michael và hơn tất cả, Scarlett bắt đầu nhận thấy một sinh linh bé bỏng đang lớn dần lên trong bụng cô?
            Với cốt chuyện rất hấp dẫn, cách giải quyết câu chuyện nhân văn, giọng viết nhẹ nhàng, trong trẻo, Muối của tình yêu đã đoạt giải thưởng “Tác phẩm hay nhất dành cho bạn trẻ” (Best Books for Young Adults) do Hiệp hội Thư viện Hoa Kỳ (American Librar Association – ALA) bình chọn.',
            'avatar' => 'hat_giong_tam_hon_5.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Truyện dài - Tiểu thuyết, Văn học',
            'pro_cate_id' => 'Sách nói',
            'price' => 19.000,
            'author' => 'Sarah Dessen',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Bí mật tình yêu (Tập 2)',
            'description' => '"Cuộc sống là tài sản lớn nhất và tình yêu là quà tặng quý giá nhất của cuộc sống."
            Đã thành một quy luật tự nhiên, từ khi ra đời cho đến khi rời khỏi thế gian, con người vẫn mải miết dấn thân vào cuộc hành trình tìm kiếm tình yêu và hạnh phúc, dẫu chỉ là trong vô thức. Đó là một cuộc hành trình dài, đầy trắc trở, và đôi khi thật cô độc, và hành trang bên mình là những câu hỏi muôn thuở chưa lời giải đáp: “Tình yêu là gì?”, “Tình yêu của ta giờ ở nơi nào?”, “Ta có tìm được hạnh phúc khi có được tình yêu?”, “Làm sao giữ cho tình yêu mãi trường tồn, bất chấp mọi thăng trầm của cuộc sống và dòng chảy vĩnh cửu của thời gian?”…
            Sẽ không có một câu trả lời đúng tuyệt đối cho những câu hỏi trên. Câu trả lời đến từ cảm nhận, từ vốn sống, nhân sinh quan và sự chọn lựa của mỗi người.
            Qua quyển sách Bí mật Tình yêu, tiến sĩ Leo Buscaglia muốn gửi gắm đến chúng ta một cách nhìn thật mới mẻ về tình yêu sau 25 năm dài nghiên cứu. Với những chiêm nghiệm sâu sắc về cuộc sống, tác giả đã chỉ ra cho ta thấy vì sao ta có được hạnh phúc trong tình yêu, hoặc tuy đã nỗ lực rất nhiều mà vẫn chưa gặp được tình yêu đích thực. Đó phần lớn phụ thuộc vào cách nghĩ, cách nhìn và cách chúng ta ứng xử trong tình yêu. Nếu ta có thể lựa chọn một thái độ sống tích cực cho cuộc đời mình, chúng ta nhất thiết cũng phải lựa chọn một thái độ đúng đắn đối với tình yêu. Chỉ có như vậy, tình yêu trong ta mới không mau chóng lụi tàn khi những phút giây đắm say ban đầu đã qua, mới có thể mãi xanh tươi và nồng thắm theo thời gian và sẽ trở thành nguồn cổ vũ tinh thần mạnh mẽ nhất giữa những thăng trầm của cuộc sống.
            Không như một số quyển sách khác, các bạn sẽ không tìm thấy trong Bí mật tình yêu những câu chuyện tình diễm lệ với những kết thúc hoàn hảo, mà tác giả sẽ làm ta bất ngờ trước sự tinh tế của ông. Tình yêu ở đây được nhìn nhận, phân tích, soi xét một cách thẳng thắn và thấu đáo. Mọi khía cạnh, mọi ngõ ngách sâu khuất nhất của tình yêu đều được cái nhìn sắc sảo, toàn diện của tiến sĩ Leo Buscaglia phát hiện và mổ xẻ đến tận cùng. Ông chỉ cho ta thấy rõ những thuộc tính cơ bản của tình yêu và cả những yếu tố song hành không thể thiếu của nó. Những gợi ý mà ông mang lại đã mang đến cho ta một cái nhìn sâu sắc hơn về tình yêu, và với những cảm nhận riêng của mỗi người, chúng ta sẽ phần nào tìm ra lời giải đáp cho chính mình để có thể có được một tình yêu trọn vẹn, đẹp đẽ và một cuộc đời viên mãn, hạnh phúc.',
            'avatar' => 'hat_giong_tam_hon_6.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Tâm lý - Giới tính',
            'pro_cate_id' => 'Sách nói',
            'price' => 35.000,
            'author' => 'Leo Buscaglia',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Hector và hành trình thú vị đi tìm hạnh phúc',
            'description' => 'Hector là một bác sĩ tâm thần học, công việc hằng ngày của anh là lắng nghe các bệnh nhân của mình. Đó là một công việc không dễ dàng, cực kỳ mệt mỏi vì việc lắng nghe không hề đơn giản, nhất là các câu chuyện đó đều buồn chán và bế tắc.
            Vì nỗi buồn phiền và lại không thể có phương hướng xử lý bế tắc, không thể bước ra khỏi “mê cung” bấn loạn trong tâm trạng của mình mà khách hàng mới phải đến phòng mạch gặp Hector. Và từ từ, theo năm tháng, càng thành công, càng gặp gỡ và tư vấn cho nhiều khách hàng, Hector càng cảm thấy chán chường và mệt mỏi. Anh có thể thấy rõ ràng là mình không thể giúp cho tất cả mọi người được hạnh phúc.',
            'avatar' => 'hat_giong_tam_hon_7.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Truyện dài - Tiểu thuyết',
            'pro_cate_id' => 'Sách nói',
            'price' => 28.000,
            'author' => 'François Lelord',
            'pro_pub_id' => 'NXB Tổng hợp thành phố HCM',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Blog cho tâm hồn',
            'description' => 'Blog cho tâm hồn của Madisyn Taylor là cuốn sách dành cho mỗi ngày vui sống khỏe mạnh và toại nguyện.
            Cuộc sống cho ta bao nhiêu niềm vui, tình yêu, ngày tươi sáng thì cũng đem đến ngần ấy đau khổ, buồn bã, chịu đựng. Thay vì đóng chặt cánh cửa trái tim, bạn hãy cương quyết mở rộng lòng mình để những cảm xúc tuôn trào. Hãy khai thác nguồn năng lượng thiêng liêng của tình yêu cuộc sống ẩn chứa trong bạn.
            Trong hành trình đi tìm ý nghĩa cuộc sống, ta không thể tránh khỏi những thắc mắc về các vấn đề cơ bản như: Làm thế nào để xây dựng những mối quan hệ chân thành, sâu sắc và bền chặt? Làm thế nào để đương đầu và vượt qua những nỗi đau, những tổn thương trong tâm hồn? Làm thế nào để đạt được những mục tiêu ta hằng khao khát và làm sao để tìm ra lý tưởng cuộc đời mình?
            Đúc kết từ kinh nghiệm sống của bản thân cùng nhiều ý tưởng khơi nguồn cảm hứng cho mọi người, tác giả Madisyn Taylor đã dựng nên một bức tranh tổng thể bao gồm những phương cách phát triển toàn diện nhằm khơi dậy nguồn ánh sáng cơ thể, tinh thần và trí tuệ. Những thông điệp từ cuốn sách này sẽ truyền cảm hứng, giúp bạn tạo lập một cuộc sống tự chủ và là động lực tinh thần hỗ trợ mạnh mẽ cho bạn trong hành trình cuộc sống.',
            'avatar' => 'hat_giong_tam_hon_8.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Nghệ thuật sống, Kỹ năng',
            'pro_cate_id' => 'Sách nói',
            'price' => 22.000,
            'author' => 'Madisyn Taylor',
            'pro_pub_id' => 'NXB Tổng hợp thành phố HCM',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Trái tim tuổi 19',
            'description' => 'Trái Tim Tuổi 19 của Tony Parsons là hành trình kiếm tìm lời giải, kiếm tìm sự khai sáng, là câu chuyện về việc bạn trưởng thành như thế nào, làm thế nào để từ bỏ những giấc mơ tuổi trẻ và theo đuổi những mục tiêu cao đẹp hơn, và liệu có bao nhiêu cơ hội để bạn thực hiện điều đó.
            George Bailey được trao tặng một món quà mà tất thảy chúng ta đều mơ ước: đó là cơ hội được sống thêm lần nữa. Sau một cơn đau tim ở tuổi 47, George được thay tim của một cậu bé 19 tuổi, và bỗng dưng mọi thứ đổi thay.
            Anh không còn là ông bố nghiêm khắc, luôn dõi theo nhất cử nhất động của cậu con trai và cô con gái đang tuổi lớn. Anh trở thành bạn của các con. Anh yêu vợ hết mực, Song đã không còn là một người chồng đúng nghĩa. Và anh muốn thay đổi cả thế giới...
            Giữa bạt ngàn những câu chuyện về tình yêu, gia đình... na ná nhau, dễ đọc nhưng cũng dễ quên thì Trái Tim Tuổi 19 như một nốt lạ, sẽ làm bạn đọc một lần mà nhớ mãi. Về cốt truyện, về ý nghĩa mà audio mang lại cũng như sự ảnh hưởng tới suy nghĩ của bạn. Đọc cuốn sách này, bạn sẽ hiểu những gì mà mình cần phải có để ngày một hoàn thiện bản thân hơn, sống sao cho tốt, cho có ích hơn.
            Những bậc phụ huynh và những bạn trẻ nên nghe audio này để đặt mình vào tình huống của ba mẹ của con em rồi nhận ra chúng ta nên biết thông cảm, gần gủi để hiểu nhau hơn. Đây thật sự là một cuốn sách hay không nên bỏ lỡ.',
            'avatar' => 'hat_giong_tam_hon_9.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Nghệ thuật sống, Kỹ năng',
            'pro_cate_id' => 'Sách nói',
            'price' => 28.000,
            'author' => 'Tony Parsons',
            'pro_pub_id' => 'NXB Tổng hợp thành phố HCM',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Hạt giống yêu đời',
            'description' => 'Giới thiệu cuốn sách Hạt Giống Yêu Đời của tác giả Robert Fulghum:
            Robert Fulghum không chỉ là nhà văn mà còn là một triết gia, một diễn giả được mến mộ. Fulghum là tác giả của nhiều ấn phẩm bán chạy nhất do New York Times bình chọn. Ông hiện đang sống ở Seattle, Washington.
            Hạt Giống Yêu Đời được Robert Fulghum viết trong suốt nhiều năm. Những bài viết này lúc đầu ông viết chủ yếu dành cho bạn bè, gia đình, các sinh viên của ông, sau đó được tập hợp thành một quyển sách mang tên "All I really need to know I learned in Kindergarten". Quyển sách này được bạn đọc ưu ái dành cho nhiều tình cảm và là một trong những quyển sách bán chạy của International best seller.
            Hạt Giống Yêu Đời bao gồm những mảnh ghép thú vị từ cuộc sống, những câu chuyện hài hước ý nhị, những triết lý sống sâu sắc mà bất kỳ ai cũng cần suy ngẫm. Chúng ta có thể tìm thấy những bài học quý giá ẩn đâu đó trong bao điều quanh ta. Và với những câu chuyện trong cuốn sách này, ta càng thấy cuộc đời này có giá trị và đáng yêu hơn gấp bội…
            Bạn sẽ bị chinh phục ngay khi đọc những trang sách đầu tiên, bởi những nội dung mới mẻ, trong sáng và khiến mọi người yêu đời hơn. Cuốn sách thực sự xứng đáng được, cảm nhận và lan truyền.',
            'avatar' => 'hat_giong_tam_hon_10.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Nghệ thuật sống',
            'pro_cate_id' => 'Sách nói',
            'price' => 28.000,
            'author' => 'Robert Fulghum',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Sức mạnh của điểm dừng - Tập 1',
            'description' => 'Từ trải nghiệm của bản thân, Terry Hershey, diễn giả nổi tiếng và người chủ trì những buổi tu dưỡng tinh thần, hiểu rằng luôn có cái giá phải trả nếu chúng ta không thường xuyên dành thời gian chỉ đơn giản là để dừng lại – tạm dừng các hoạt động, trân trọng khoảng thời gian tĩnh tại, và nhận ra ý nghĩa sâu xa của những khoảnh khắc bình dị trong cuộc sống.
            Vì thế, ông biên soạn Sức mạnh của điểm dừng thành 8 phần theo mùa với tâm niệm: “Tôi chia các câu chuyện theo mùa bởi vì rất nhiều người thích tuân theo trình tự các mùa trong năm. Và tôi cũng phân loại các câu chuyện theo kiểu tâm trạng hay các giai đoạn nội tâm. Hãy chọn và sử dụng chúng theo cách bạn thấy phù hợp. Cuốn sách này là của bạn, nó giúp bạn tạm nghỉ bất kể bạn đang ở mùa nào hay đang mang tâm trạng nào.” Qua 52 chương ngắn trong 8 phần – mỗi chương bao gồm câu trích dẫn, câu chuyện truyền cảm hứng hoặc gợi ý cho hoạt động suy nghiệm và thực hành – chúng ta sẽ nhận ra giá trị thâm thúy của những giây phút tĩnh tại hàng ngày, từ cuộc sống cân bằng.',
            'avatar' => 'hat_giong_tam_hon_11.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Kỹ năng',
            'pro_cate_id' => 'Sách nói',
            'price' => 32.000,
            'author' => 'Terry Hershey',
            'pro_pub_id' => 'NXB Tổng hợp thành phố HCM',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Mưa cuối đường',
            'description' => '"Hoàng run run cầm mảnh giấy... trong mảnh giấy nhỏ ấy bà ngoại ghi chép tỉ mỉ từng món tiền anh gửi cho bà... bà đã đổi tất cả ra vàng và giờ đây dì Hòa đưa lại cho anh." Bao năm qua, Hoàng thà đi nhậu chớ không về quê, anh nghĩ gửi tiền là tròn bổn phận. (Nước mắt chảy xuôi)
            "Vậy ai xứng, Hậu chăng? Hậu có lo cho hai đứa em của Thương được không, có chữa được bệnh cho bố Thương không? Thôi, chúng mình mãi là bạn. Hậu nhé." Hơn chục năm sau câu nói ấy, họ gặp lại nhau trên bờ biển - cuộc đời. (Cô gái mang tên dòng sông)
            "Người ấy đã tan vào với đất, đã hòa vào sắc đỏ của đất bazan và màu vàng rực rỡ của cúc quỳ. Cô muốn ở gần, muốn làm lại tất cả..." Ấy là đất rẫy cao su đỏ tươi. Ấy là câu chuyện của hai người đàn bà cố níu lấy những tình yêu sắp tắt. (Mưa cuối đường)
            Chuyện tình buồn nào rồi cũng qua đi, chỉ tình yêu còn nặng mang mãi trong lòng. Đó cũng chính là tâm sự của những con người trong 12 truyện ngắn Mưa cuối đường của Trương Thị Thương Huyền.',
            'avatar' => 'hat_giong_tam_hon_12.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Kỹ năng',
            'pro_cate_id' => 'Sách nói',
            'price' => 32.000,
            'author' => 'Trương Thị Thương Huyền',
            'pro_pub_id' => 'NXB Tổng hợp thành phố HCM',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Hạt giống tâm hồn dành riêng cho phụ nữ 2 (Chicken soup for women 2)',
            'description' => '"Bên cạnh ánh sáng lung linh của các vì sao còn có ánh sáng êm dịu và huyền bí của tâm hồn người phụ nữ". -- Victor Hugo
            "Tất cả vẻ đẹp và những điều diệu kỳ trong cuộc sống được tạo nên là nhờ vào sức mạnh tình yêu của người phụ nữ." -- Maxim Gorki
            Thế giới phụ nữ, một thế giới nhạy cảm, bí ẩn nhưng lại vô cùng dịu dàng, thân thương, là nơi khởi phát của tình yêu thương và lòng nhân hậu. Đó là những điều không thể thiếu trong cuộc sống này.
            Có thể hàng ngày, bạn vẫn cùng chuyện trò, tiếp xúc với những người phụ nữ, những người mẹ, người vợ, người chị, hay cô giáo của mình, nhưng không phải lúc nào bạn cũng có thể hiểu hết được họ. Đôi khi, những người phụ nữ vẫn ở bên cạnh bạn mỗi ngày không để lại ấn tượng gì sâu đậm, nhưng khi xa rồi, bạn mới có cảm giác thiếu vắng, trống trải một điều gì đó đặc biệt, thiêng liêng và gần gũi.
            Cuộc sống không ngừng vận động, người phụ nữ của ngày nay càng gánh thêm nhiều trọng trách, áp lực về công việc, trách nhiệm gia đình và xã hội lên đôi vai nhỏ bé của mình. Nhưng người phụ nữ vẫn luôn là chính họ với một tâm hồn đôn hậu tình người, cùng với thiên chức làm vợ, làm mẹ, là "ngọn lửa sưởi ấm gia đình". Người phụ nữ sinh ra là để viết nên khúc nhạc tình yêu của con người!
            Trong nhịp sống hối hả hàng ngày, chúng ta hãy dành một chút thời gian để ngừng lại, để nói lời cảm ơn đến những người phụ nữ – những người làm nên ý nghĩa cuộc sống. Hãy cảm ơn vì mỗi ngày, bạn có thể cùng suy nghĩ, cùng cảm nhận, cùng cho đi và nhận lại tình yêu, cùng nở nụ cười hay chia sẻ những giọt nước mắt… với những người phụ nữ bên mình. Cuộc sống này sau cùng thật đẹp, vì sự hiện hữu của những người phụ nữ – hiện thân đẹp và ý nghĩa nhất của tình yêu.',
            'avatar' => 'hat_giong_tam_hon_13.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Kỹ năng',
            'pro_cate_id' => 'Sách nói',
            'price' => 21.000,
            'author' => 'Jack Canfield',
            'pro_pub_id' => 'NXB Tổng hợp thành phố HCM',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Hồn ma đêm giáng sinh 2',
            'description' => 'Câu chuyện khắc họa sống động nhân vật Ebenezer Scrooge keo kiệt, ưa gắt gỏng; tuy nhiên đã có những chuyển biến lớn về tư tưởng, tình cảm và nhận thức về giá trị nhân bản sau cuộc ghé thăm của những “vị khách siêu nhiên” là Hồn ma vất vưởng Jacob Marley và ba Hồn ma của Giáng sinh Quá khứ, Hiện tại và Tương lai, để cuối cùng ông trở thành người mang giá trị nhân ái của Giáng sinh lan tỏa đến mọi người.
            Bản thân Ebenezer Scrooge là hiện thân của mùa đông khắc nghiệt. Song mùa đông nào rồi cũng phải qua đi để mùa xuân vui tươi rộn ràng trải rộng nơi nơi. Vì vậy trái tim của Scrooge dù thật băng giá, hà khắc nhưng trong sâu thẳm vẫn lánh lánh ngọn lửa thiện ý ấm áp tình người, và càng lúc càng bùng lên mạnh mẽ, làm tan chảy lớp nhận thức ích kỷ chai lạnh khi những Hồn ma giúp ông lần giở từng trang đời mình.',
            'avatar' => 'hat_giong_tam_hon_14.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Truyện dài - Tiểu thuyết, Văn học',
            'pro_cate_id' => 'Sách nói',
            'price' => 19.000,
            'author' => 'Charles Dickens',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Những quyết định thay đổi cuộc sống',
            'description' => 'Trong cuộc sống, không ít lần bạn phải đứng trước sự lựa chọn khó khăn khi phải quyết định một vấn đề nào đó. Có lúc bạn chỉ dựa theo Cảm tính của mình, nhưng có những quyết định quan trọng mà bạn cần phải suy nghĩ và cân nhắc... Cuộc sống của bạn với những niềm vui hay nỗi buồn, hạnh phúc hay bất hạnh, thành công hay thất bại...đều phụ thuộc vào những quyết định của bạn. Audio đặc biệt này sẽ giúp bạn cách để có những quyết định đúng đắng và sáng suốt, giúp bạn thành công và hạnh phúc hơn trong cuộc sống.',
            'avatar' => 'hat_giong_tam_hon_15.jpg',
            'pro_att_id' => 'Hạt giống tâm hồn, Truyện dài - Tiểu thuyết, Văn học',
            'pro_cate_id' => 'Sách nói',
            'price' => 22.000,
            'author' => 'Spencer Johnson',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => '[Tóm tắt sách] Trí tuệ xã hội',
            'description' => 'Trí tuệ xúc cảm là một hiện tượng kỳ lạ trên thế giới với hơn 5 triệu bản đã được bán trên toàn thế giới. Và bây giờ, một lần nữa Daniel Goleman đã đưa ra một tổng kết đột phá cơ bản về những khám phá mới nhất về sinh học và khoa học não bộ, theo đó, con người chúng ta “luôn đưa ra các tín hiệu để liên hệ” và ảnh hưởng sâu sắc đến kỳ lạ của nó tới các mối quan hệ của chúng ta trong mọi mặt của đời sống.
            Vượt xa so với nhận thức của chúng ta, những tiếp xúc hàng ngày của chúng ta với cha mẹ, vợ chồng, ông chủ và thâm chí cả những người lạ đã định hướng não bộ của chúng ta và ảnh hưởng đến các tế bào trên toàn bộ cơ thể của chúng ta, thậm chí ảnh hưởng đến cả gen của chúng ta – theo cả hướng tốt hoặc xấu. Trong Trí tuệ xã hội, Daniel Goleman đã khám phá ra một khoa học mới nổi bật về những liên hệ kỳ lạ trong thế giới tương tác giữa các cá nhân với nhau. Khám phá cơ bản nhất của cuốn sách chính là: chúng ta sinh ra vốn đã có tính hoà đồng, luôn bị lôi kéo vào một “sóng thần kinh“ sẽ liên kết não bộ của chúng ta với những người xung quanh.
            Goleman giải thích sự chính xác đến kinh ngạc của các ấn tượng đầu tiên, điểm xuất phát là sự uy tín và sức mạnh xúc cảm, sự phức tạp của các lôi cuốn về giới tính, và cách thức để chúng ta nhận ra những lời nói dối. Ông cũng tiết lộ ‘mặt sau’ của Trí tuệ xã hội, từ tính ích kỷ đến tính xảo quyệt và bệnh thái nhân cách.
            Liệu có cách nào để chúng ta có thể giúp lũ trẻ trở nên vui vẻ hơn không? Thế nào là cơ sở của một sự kết hợp hài hoà, tốt cho cả hai người? Làm thế nào để những nhà lãnh đạo doanh nghiệp và những giáo viên có thể lãnh đạo và giảng dạy tốt, thậm chí cả những người có năng lực nhất trong số này? Làm thế nào để các tập thể đối đầu, thành kiến và căm thù nhau có thể sống chúng với nhau trong hoà bình?
            Câu trả lời cho những câu hỏi này có thể khó nắm bắt hơn chúng ta nghĩ. Và Goleman đã đưa ra một tin tức khích lệ nhất có sức thuyết phục mạnh mẽ: chúng ta – loài người vốn có xu hướng gắn liền với sự thấu cảm, tinh thần hợp tác và lòng vị tha - để chúng ta phát triển Trí tuệ xã hội và nuôi dưỡng những khả năng này trong mỗi chúng ta và trong những người khác.',
            'avatar' => 'phat_trien_ban_than_1.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 22.000,
            'author' => 'Daniel Goleman',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Nghĩ giàu làm giàu',
            'description' => '“Bất kỳ ai cũng có thể ao ước được giàu có, và hầu hết đều ao ước như thế, nhưng chỉ một ít người hiểu rằng một kế hoạch rõ ràng, cộng với ước muốn làm giàu cháy bỏng mới là phương tiện đáng tin để tích lũy của cải”.
            Với kinh nghiệm của hơn 500 người vươn lên từ hai bàn tay trắng, tập sách trình bày đầy đủ hướng dẫn về cách làm thế nào bán được các dịch vụ cá nhân, cung cấp một hệ thống hoàn hảo để tự phân tích bản thân, sẵn sàng phơi bày những gì đứng giữa bạn & “núi tiền” trong quá khứ, đặc biệt sách sẽ mô tả công thức để đạt thành tựu cá nhân nổi tiếng của Andren Carnegie - một người đã tích lũy cho mình hàng trăm triệu Mỹ kim và truyền bí quyết cho không dưới hai mươi triệu phú.',
            'avatar' => 'phat_trien_ban_than_2.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 26.000,
            'author' => 'Napoleon Hill',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Người giỏi không phải là người làm tất cả',
            'description' => 'Quản lý theo kiểu "giao khoán" là phong cách phổ biến nhất hiện nay. Người quản lý thực hiện công việc giao việc và chỉ can thiệp khi nào nhân viên có sai sót. Họ luôn quan tâm đến kết quả công việc, và chỉ biết la lối ầm ĩ khi nhân viên làm sai. Họ thường để mặc nhân viên với mớ công việc ngổn ngang và không một sự hướng dẫn. Nếu bạn đã đọc và áp dụng những điều mà Donna M. Genett đã viết về nghệ thuật uỷ quyền, chắc chắn những lần xuất hiện ngắn ngủi vô ích đó có của người quản lý sẽ không còn cần thiết nữa.
            Dù bạn là người uỷ thác hay được uỷ thác công việc, nhưng nếu biết ứng dụng sáu nguyên tắc này, chắc chắn bạn sẽ cảm thấy khối lượng công việc giảm đi đáng kể, nhờ vậy bạn sẽ có thêm nhiều thời gian để tập trung vào những điều thật sự quan trọng trong công việc và trong cuộc sống.',
            'avatar' => 'phat_trien_ban_than_3.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 26.000,
            'author' => 'Donna M. Genett',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Bí mật của may mắn',
            'description' => 'Good Luck - Bí Mật Của May mắn - là cuốn sách nổi tiếng và độc đáo nhất được xuất bản năm 2004. Good Luck là cuốn sách đầu tiên trong lịch sử hiện đại bán được bản quyền dịch ra 15 ngôn ngữ trên thế giới trước khi được xuất bản ở bất kỳ quốc gia nào.
            Câu chuyện trong Bí mật của May mắn hấp dẫn như câu chuyện thần thoại với những chân lý thực tế và vĩnh hằng của cuộc sống, mang lại cho người đọc, niềm tin, hy vọng, những trải nghiệm quý báu, đồng thời lý giải tại sao một số người luôn gặp được may mắn trong khi những người khác lại không gặp. Cuốn sách đã mang đến cho độc giả một cái nhìn thú vị và sâu sắc về thay đổi những điều kiện cần thiết để tạo ra và duy trì sự may mắn trong cuộc đời chúng ta. Độc giả khắp mọi nơi đã chú tâm thưởng thức, chuyền tay cho bè bạn và mỗi người đều mua nhiều bản để tặng cho gia đình, người thân, đồng nghiệp như những món quà đặc biệt của sự may mắn.
            Bí Mật của May Mắn kể về một câu chuyện đầy cảm động giữa hai ông già, Max và Jim, khi họ tình cờ gặp nhau ở công viên trong tâm sau 50 năm xa cách. Trong khi Max đạt được những thành công và hạnh phúc tràn đầy trong cuộc đời từ sự khởi đầu vô cùng khó khăn, từ hai bàn tay trắng, thì Jim lại không thể làm được điều đó, lúc khởi đầu ông đã được cuộc sống ưu đãi rất nhiều.
            Bí quyết thành công và may mắn của Max nằm ở câu chuyện kỳ diệu mà người ông đã kể lại cho Max từ nhiều năm trước. Câu chuyện đó thật kỳ bí và có sắc thái gợi nhớ đến những nhà giả kim, hiền triết xa xưa, chỉ ra bí mật, cách nắm bắt các cơ hội và gặt hái may mắn, thành công. Trong đoạn kết đầy bất ngờ, Good Luck tạo ra một chu trình khép kín, mang lại sự khích lệ, những hướng dẫn cách thực hiện và thật trọn vẹn với một câu chuyện đầy cuốn hút. Đây thực sự là một món quà đặc biệt, thú vị và đầy cảm hứng mà Alex Rovira và Fernando Trías de Bes đã mang đến cho chúng ta.
            Good Luck là một câu chuyện lạ thường hướng đến một bài học vô cùng giá trị về cuộc sống: Sự may mắn không xuất hiện ngẫu nhiên trong hành trình cuộc sống chúng ta; chính chúng ta phải tìm và tạo ra những điều kiện để may mắn tìm đên với mình. Dưới ngòi bút của Alex Rovira và Fernando Trías de Bes - hai nhà tư vấn tâm lý và tiếp thị hàng đầu thế giới đã có công trình nghiêm cứu về thái độ, hành vi con người cũng như ước mong, niềm tin của họ đối với sự may mắn, thành công trong cuộc sống, câu chuyện giản dị này có thể được áp dụng rất rộng rãi cho tất cả mọi người và có khả năng khích lệ một cách độc đáo.',
            'avatar' => 'phat_trien_ban_than_4.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 27.000,
            'author' => 'Fernando Trías de Bes, Alex Rovira',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Tư duy đột phá',
            'description' => 'Tư duy đột phá đơn giản như chính tên gọi của nó, đó là một cách suy nghĩ khác biệt, phi truyền thống, hay nói đơn giản hơn là không theo lối mòn. Đó cũng có thể là một sáng kiến, một giải pháp tối ưu hay một hệ thống vượt trội được áp dụng để đạt kết quả tốt nhất.
            Với Tư duy đột phá, bạn sẽ đến gần hơn với mục tiêu mà không tốn quá nhiều thời gian và nguồn lực như phương pháp thông thường nữa.',
            'avatar' => 'phat_trien_ban_than_5.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 21.000,
            'author' => 'Hibino Shozo',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Tinh thần Samurai trong thế giới phẳng',
            'description' => 'Xuất thân từ tầng lớp võ sĩ, những chiến binh Samurai từng bước gây ảnh hưởng trong xã hội Nhật Bản rồi vươn lên nắm quyền lực từ thế kỷ 12 và chiếm giữ mọi vị trí chủ chốt trong chính phủ cho đến tận năm 1868. Những chiến binh này sống theo một bộ quy tắc giá trị chặt chẽ - sau này được biết đến với tên gọi là Võ sĩ đạo - nhấn mạnh lòng dũng cảm, danh dự và sự trung thành cá nhân. Nổi tiếng về sự quả cảm, khắc kỷ và kiên cường trong mọi tình huống, họ là những chiến binh được tôn kính nhất thời đó.
            Cụm từ Võ sĩ đạo hiểu theo nghĩa đen là "đạo hay lối hành xử của chiến binh". Khái niệm về một chiến binh dũng mãnh với trái tim nhân hậu nghe đầy nghịch lý, nhưng bản thân từ chiến binh trong tiếng Nhật (samurai) còn có nghĩa là "phục vụ". Xét ở tầng ý nghĩa sâu nhất thì trái tim của một chiến binh như vậy là để giúp đỡ mọi người. Dựa trên cơ sở đó, tác giả Brian Klemmer đã mở rộng khía cạnh này để tạo ra thuật ngữ "chiến binh nhân từ" dành để chỉ những người hội tụ được các giá trị đạo đức vững vàng, có khả năng biến những ý định của mình thành hiện thực, trong khi vẫn dành trọn cuộc đời để phụng sự xã hội.
            Sau khi liệt kê mười phẩm chất cần phải có của một chiến binh nhân từ, tác giả đã đề xuất những phương pháp rèn luyện bản thân hiệu quả để giúp bạn trở thành một trong những chiến binh đó. Thông qua quá trình đó, quyển "Tinh thần Samurai trong thế giới phẳng" (The Compassionate Samurai) sẽ giúp bạn nhận ra rằng chính bạn có thể là một người tiên phong và có ảnh hưởng sâu rộng, có khả năng xây dựng những mối quan hệ tốt đẹp, vươn tới đỉnh cao của sự nghiệp, đạt được những thành công về tài chính, giúp đỡ người khác một cách có ý nghĩa, trong khi vẫn là một người biết quan tâm, chia sẻ và hưởng thụ tinh hoa cuộc sống. Đây có lẽ là sự kết hợp hoàn hảo nhất nhờ hòa quyện được niềm vui từ thành công bên ngoài xã hội với cảm giác bình an từ sâu thẳm tâm hồn.
            Hầu hết mọi người đều tin rằng họ phải chọn lựa một trong hai cách: hoặc giàu có về tiền bạc nhưng thiếu tình người, hoặc nghèo khó nhưng trong sạch và thánh thiện. Bạn không cần lựa chọn, bởi vì bạn hoàn toàn có thể có được cả hai. Bạn có thể trở thành một người giàu có, sống chan hòa, sẵn sàng cho đi để giúp đỡ người khốn khó, và một chiến binh thực thụ, một người đáng tin cậy với trái tim bao dung, nhân hậu.
            Nếu bạn từng có lúc thấy như mình đang đứng trước ngã ba và phải lựa chọn giữa hai con đường như thế, "Tinh thần Samurai trong thế giới phẳng" sẽ giúp bạn kết hợp cả hai lựa chọn này để đạt được những kết quả phi thường trong một thế giới bình thường, đồng thời duy trì được những chuẩn mực đạo đức cao nhất.',
            'avatar' => 'phat_trien_ban_than_6.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 40.000,
            'author' => 'Brian Klemmer',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Cú hích',
            'description' => 'Cú hích của Richard H. Thaler và Cass R. Sunstein là một cuốn sách nhiều ý tưởng cảm hứng, thú vị và thực tế. Bên trong quyển sách này là viên ngọc sáng nhất của kinh tế học hành vi. Đây là cuốn sách phải đọc đối với bất kỳ những ai muốn tạo nên sự khác biệt và làm cho những sự việc xung quang chúng ta vận hành hiệu quả hơn. Chắc chắn nó sẽ nâng tầm các quyết định của bạn thông minh hơn và làm cho cuộc sống chính bạn sáng tạo, tốt đẹp hơn.
            Mỗi ngày, chúng ta thực hiện đủ loại quyết định, nhưng đáng tiếc là chúng ta thường có những lựa chọn tồi tệ. Lý do, theo các tác giả, là vì con người dễ bị tác động bởi nhiều định kiến khác nhau, mà lắm lúc chúng làm ta trở nên thật ngớ ngẩn.
            Thaler và Sunstein mời chúng ta bước vào thế giới của những lựa chọn, một thế giới xem nhân tính là một vật phẩm được ban tặng.
            Các tác giả cho thấy bằng cách tìm hiểu suy nghĩ của người khác, chúng ta có thể thiết kế các môi trường lựa chọn giúp họ dễ dàng tìm được những gì tốt nhất cho mình. Sử dụng nhiều ví dụ sống động từ những mặt quan trọng nhất trong đời sống, Thaler và Sunstein cho chúng ta thấy làm thế nào một” kiến trúc lựa chọn” tinh tường có thể hích con người theo những hướng có lợi mà không hạn chế quyền tự do lựa chọn của chúng ta.
            Đây là một trong những cuốn sách hấp dẫn và kích thích tư duy sáng tạo nhất trong những năm gần đây.
            Cú hích rất có giá trị và tạo nên sự khác biệt sâu sắc. Một cuốn sách mà theo Steven Levitt - đồng tác giả cuốn Kinh tế học kỳ quái – Freakonomics “là tác phẩm đã làm thay đổi hoàn toàn thế giới quan của tôi”.',
            'avatar' => 'phat_trien_ban_than_7.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 40.000,
            'author' => 'Richard H. Thaler, Cass R. Sunstein',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Steve Jobs - Sức mạnh của sự khác biệt',
            'description' => 'Cuốn sách “Steve Jobs – Sức mạnh của sự khác biệt” được thực hiện bởi một nhóm người Việt say mê công nghệ thông tin. Lấy ý tưởng từ chiếc Ipad, trang bìa ấn tượng của cuốn sách có đầy đủ các Icon thú vị. Từ cột sóng 3G mà ngày nay đã quá phổ biến với tín đồ công nghệ đến nút nhấn duy nhất đã làm thay đổi cả nền thông tin di động trên thế giới, slide trượt quen thuộc mời độc giả “mở để đọc”. Các con số đều ẩn chứa thông điệp đặc biệt, 19h:30 Wednesday, 5 October đúng là giờ phút định mệnh thế giới mất đi thiên tài công nghệ thông tin. Cột pin dừng lại ở 56% - số tuổi tung hoành trên trần thế của “chàng lãng tử” ngang ngược Steve Jobs.
            Bìa bốn của cuốn sách đặc biệt tưởng nhớ Steve Jobs được thiết kế sáng tạo và tràn đầy cảm hứng với người đọc, dưới dạng một trang tìm kiếm của Google search, có cụm từ khóa “Steve Jobs – Sức mạnh của sự khác biệt” và những trang kết quả. “Steve Jobs – Sức mạnh của sự khác biệt” sẽ không chỉ là cuốn sách đặc biệt tưởng nhớ người hùng vĩ đại của công nghệ thông tin mà còn là những góc nhìn, phân tích sắc nét về bí mật của những khác biệt tạo nên thành công của Steve, cùng nỗi đồng cảm với bạn đọc trong cuộc chiêm nghiệm sâu sắc những thông điệp cuộc sống. Cuốn sách này do GS-TS Huỳnh Ngọc Phiên làm chủ biên.',
            'avatar' => 'phat_trien_ban_than_8.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 26.000,
            'author' => 'GS-TS Huỳnh Ngọc Phiên',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Người giàu có nhất thành Babylon',
            'description' => 'Người Giàu Có Nhất Thành Babylon của George S. Clason đã trở thành một tác phẩm kinh điển đầy hứng khởi cho giới kinh doanh ngày nay.
            Trước mắt bạn, tương lai đang trải rộng con đường dẫn tới những miền đất xa xôi đầy hứa hẹn. Trên con đường đó, bạn háo hức, mong muốn thực hiện nhiều ước mơ, dự định, khát khao… của riêng mình.
            Để những nguyện vọng của mình được thực hiện, ít nhất bạn phải thành công về mặt tiền bạc. Quyển sách này sẽ giúp bạn biết cách vận dụng những nguyên lý quan trọng để phát triển tài chính. Hãy để cuốn sách dẫn dắt bạn đi từ một hoàn cảnh khó khăn, tiêu biểu là một cái túi lép xẹp, đến một cuộc sống đầy đủ và hạnh phúc, tiêu biểu là một túi tiền căng phồng, sung túc.
            Khi nói đến tiền bạc, chúng ta thường đề cập đến quy luật trọng trường và nó luôn phổ quát và bất biến trong mọi trường hợp. Trải qua thời gian dài và phát triển, quy luật này đã được trải nghiệm và đúc rút thành những bí quyết không chỉ đảm bảo cho bạn một túi tiền đầy, mà còn giúp cho bạn có một cuộc sống cân bằng để có thể phát triển mỹ mãn hơn những tiềm năng của bản thân trong các lĩnh vực khác của cuộc sống. Bởi trên thực tế, không ai có thể phủ nhận rằng sự dồi dào về vật chất có thể làm cho đời sống con người trở nên tốt đẹp hơn. Riêng trong lĩnh vực kinh doanh, sức mạnh tài chính là phương tiện chủ yếu để đo lường mức độ thành đạt của các doanh nhân.
            Ngày nay, tiền bạc vẫn có những ảnh hưởng lớn đối với cuộc sống con người, cũng giống như cách đây năm ngàn năm nó đã chi phối mạnh mẽ cuộc sống của cư dân vương quốc Babylon, thúc đẩy họ tìm hiểu và nắm bắt các quy luật tạo ra tiền, nhằm có được một cuộc sống sung túc và sang trọng bậc nhất.
            Những trang sách này sẽ đưa chúng ta trở lại vương quốc Babylon cổ đại, cái nôi nuôi dưỡng những nguyên lý cơ bản về tài chính mà giờ đây con người hiện đại đã kế thừa và vận dụng trên toàn thế giới.',
            'avatar' => 'phat_trien_ban_than_9.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 26.000,
            'author' => 'George S. Clason',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Khác biệt để bứt phá',
            'description' => 'Giới thiệu cuốn sách Khác Biệt Để Bứt Phá của bộ đôi tác giả Jason Fried, David Heinemeier Hansson:
            Hầu hết các sách kinh doanh đều cho bạn cùng một lời khuyên. Đó là viết ra bản kế hoạch, nghiên cứu thị trường, tìm kiếm nhà đầu tư, vân vân và vân vân. Nếu bạn đang tìm một quyển sách như thế thì tốt nhất bạn hãy đặt cuốn sách này trở lại kệ. Còn nếu không?
            Khác Biệt Để Bứt Phá chỉ cho bạn một phương thức vô cùng dễ dàng để bạn gặt hái thành công. Bạn sẽ biết vì sao mình không cần đến nguồn vốn bên ngoài và vì sao bạn nên phớt lờ sự cạnh tranh. Sự thật là bạn cần ít hơn bạn nghĩ. Bạn không cần phải làm việc cật lực, không cần phải hoang phí thời gian cho công việc giấy tờ hay họp hội. Bạn thậm chí còn không cần đến cả văn phòng nữa. Những thứ đó tất thảy đều dư thừa.
            Cái bạn cần là đừng nói nữa, mà hãy bắt tay vào việc. Cuốn sách sẽ chỉ cho bạn khối điều hay ho. Bạn sẽ học cách làm việc hiệu quả hơn mà không mất quá nhiều thời gian.
            Không giống bất kì quyển sách nào dạy người ta cách thành công, Khác Biệt Để Bứt Phá hoàn toàn khác khi thay đổi mọi quan điểm mà bấy lâu nay bạn cho là đúng đắn. Bạn sẽ hiểu hơn và quyết định thay đổi bản thân mình. Chắc chắn bạn sẽ phải cám ơn quyển sách này vì đã dẫn bạn đi đúng hướng. Bạn sẽ cảm nhận rõ sự khác biệt ngày những trang đầu quyển sách. Thẳng thắng, rõ ràng và dễ đọc, Khác biệt để bứt phá là cuốn sách thực tiễn tuyệt vời dành cho những ai đã và đang mơ ước đến việc tạo dựng một thứ gì đó bằng chính sức mình.',
            'avatar' => 'phat_trien_ban_than_10.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 26.000,
            'author' => 'Jason Fried, David Heinemeier Hansson',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => '7 thói quen tạo gia đình hạnh phúc',
            'description' => 'Gia đình là tế bào của xã hội và thành công lớn nhất của chúng ta là ở gia đình. Việc quan trọng nhất phải làm trong cuộc đời mỗi chúng ta là ở trong mỗi gia đình chúng ta.
            Với cùng một quan điểm sâu sắc, giản dị và giàu kinh nghiệm thực tế - đã được hơn 10 triệu độc giả quan tâm - Stephen R. Covey tiếp tục phân tích những nguyên tắc đã từng được giới thiệu trong cuốn 7 Thói Quen Để Thành Đạt trong việc xây dựng một gia đình tràn ngập yêu thương và bền vững qua các thế hệ.
            7 thói quen tạo gia đình hạnh phúc sẽ giúp bạn tìm ra câu trả lời cho các vấn đề thường gặp trong gia đình như:
            Làm thế nào để "cái tôi" của mỗi người trong gia đình chuyển thành cái "chúng ta", trong khi mọi thứ quanh chúng ta đều thiên về "cái tôi"?
            Làm thế nào chúng ta tạo được những khoảng thời gian có ý nghĩa bên gia đình, khi cả bố và mẹ (hoặc một trong hai người) phải làm việc tất bật để kiếm sống cho gia đình?
            Làm thế nào chúng ta tạo được sự hòa hợp trong gia đình?
            Làm thế nào để con cái tự giác làm việc nhà và các bài tập ở trường, mà không cần phải nhắc nhở hoặc nài nỉ?
            Làm thế nào để thuyết phục các thành viên trong gia đình khi họ chẳng bao giờ chịu lắng nghe bạn?
            Làm thế nào để củng cố gia đình bạn chống lại những ảnh hưởng tiêu cực ngoài xã hội?
            Bạn cần phải làm gì khi cảm thấy mình không hiểu nỗi con cái?
            Làm thế nào tạo được nề nếp kỷ luật mà không cần hình phạt?
            Làm thế nào hàn gắn lại những mối quan hệ đổ vỡ và tái tạo cảm xúc nguội lạnh?
            Cuốn sách này mang đến cho bạn nhũng bài học quý giá để tạo dựng và duy trì một văn hóa gia đình vững chắc trong xã hội nhiều biến động ngày nay.',
            'avatar' => 'phat_trien_ban_than_11.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 29.000,
            'author' => 'Stephen R. Covey',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Thức tỉnh mục đích sống',
            'description' => 'Chuyển hóa tâm thức con người là trọng tâm của những điều Eckhart Tolle đề cập trong quyển sách nổi tiếng A New Earth - Thức Tỉnh Mục Đích Sống. Theo ông, sự thức tỉnh là bước kế tiếp sẽ xảy ra trong quá trình phát triển tâm thức của nhân loại. Nhân loại sẽ bước sang một giai đoạn mà sự thức tỉnh trong tâm hồn sẽ tạo ra sự tự do và niềm hạnh phúc miên viễn trong mỗi con người và trên toàn thế giới. 
            Mục đích chính của “Thức tỉnh mục đích sống” không phải là để cung cấp thêm thông tin hay những niềm tin mù quáng cho trí năng của bạn, hay cố thuyết phục bạn về một điều gì, mà nó mang đến cho bạn một sự chuyển hóa trong nhận thức, tức là thức tỉnh bạn ra khỏi những dòng suy nghĩ miên man ở trong đầu. Nếu được như vậy thì bạn sẽ không chỉ thấy cuốn sách là “thú vị”. Vì thú vị có nghĩa là bạn còn đứng ở bên ngoài, tìm vui với những ý nghĩ, và khái niệm ở trong đầu bạn để tư duy rằng mình đồng ý hay không nên đồng ý với cuốn sách.
            Vì “Thức tỉnh mục đích sống” được viết cho bạn, do đó cuốn sách hoặc rất vô nghĩa đối với bạn, hoặc nó làm cho nhận thức của bạn có sự thay đổi lớn. Tuy nhiên cuốn sách này chỉ có thể thức tỉnh những người đã sẵn sàng để tỉnh thức. Mà không phải ai cũng sẵn sàng để tỉnh thức. Nếu trong lúc này bạn chưa rõ tỉnh thức có nghĩa là gì, thì bạn cũng không cần bận tâm nhiều về nghĩa của từ ấy, hãy cứ tiếp tục đọc và khi nào trong bạn có sự tỉnh thức, thì bạn sẽ hiểu “tỉnh thức” có nghĩa là gì. Quá trình tỉnh thức một khi đã bắt đầu ở trong bạn rồi thì không thể đảo ngược lại; và để cho quá trình này được bắt đầu, bạn chỉ cần trải qua trạng thái tỉnh thức - dù chỉ trong một thoáng chốc. Đối với một số người thì một thoáng chốc của trạng thái tỉnh thức đó sẽ xảy đến khi họ đọc cuốn sách này.',
            'avatar' => 'phat_trien_ban_than_12.jpg',
            'pro_att_id' => ', Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 29.000,
            'author' => 'Eckhart Tolle',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Tư duy tối ưu',
            'description' => 'Nếu làm việc chăm chỉ hơn, tài tình hơn và nhanh nhẹn hơn mà vẫn không có kết quả, bạn phải làm cách nào?
            Nếu bạn phải dừng lại và suy ngẫm về “những ưu tiên số một” trong đời – một vài điều bạn cho là quan trọng nhất – thì đó là những điều gì?
            Làm thế nào để xác định được chính xác “những điều quan trọng nhất” trong đời – những điều có vai trò quyết định đến chất lượng sống của bạn, mang đến cho bạn một cuộc sống thành đạt ngoài xã hội và yên bình trong nội tâm?
            Và liệu bạn có thực sự dành đủ sự quan tâm, sự tập trung và thời gian cho những điều ấy?',
            'avatar' => 'phat_trien_ban_than_13.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 20.000,
            'author' => 'Stephen R. Covey',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Bẻ khóa bí mật triệu phú',
            'description' => 'Bẻ khóa bí mật triệu phú là những sẻ chia thiết thực và bổ ích của hai tác giả Thomas J. Stanley và William D. Danko nhằm giúp các độc giả tiếp cận, khám phá tư duy làm giàu - một trong những yếu tố then chốt để làm nên thành công trong kinh doanh và danh tiếng cho người sở hữu được nó.
            Như thanh nam châm có cực nam và cực bắc, chúng ta đang sống trong thế giới của những điều đối nghịch: nóng và lạnh, trong và ngoài, trên và dưới, tốt và xấu… Mọi thứ đều có quy luật bên trong và bên ngoài. Sức khỏe là kết quả, là cái hiển hiện ra bên ngoài. Bệnh tật là kết quả. Giàu có là kết quả. Nghèo đói là kết quả. Bất hạnh hay hạnh phúc cũng chỉ là kết quả, kết quả của những gì đang diễn ra bên trong bạn!
            Nhiều cuộc khảo sát, nghiên cứu trên quy mô quốc tế đã chỉ ra rằng: Người giàu thường tuân thủ một lối sống cho phép họ tích lũy tiền bạc. Trong quá trình hoạt động nghề nghiệp cũng như thực hiện cuốn sách Bẻ khóa bí mật triệu phú, Thomas J. Stanley và William D. Danko đã phát hiện ra 7 mẫu số chung của những người làm giàu thành công, đó là:
            Họ sống thoải mái dưới mức khả năng tài chính dồi dào của mình. 
            Họ phân bổ hiệu quả thời gian, sức lực và tiền bạc bằng những cách hướng đến mục tiêu tích lũy của cải. 
            Họ tin rằng sự độc lập tài chính quan trọng hơn việc thể hiện địa vị xã hội. 
            Cha mẹ họ không chu cấp tài chính. 
            Những người con đã trưởng thành của họ có khả năng tự túc về tài chính. 
            Họ giỏi nắm bắt những cơ hội trên thị trường. 
            Họ chọn đúng nghề nghiệp.
            Cuốn sách Bẻ khóa bí mật triệu phú đã đứng nhất danh sách best-seller của các tờ báo danh tiếng: The New York Times, The Wall Street Journal, Business Week, USA Today, Los Angeles Times.
            Hãy đọc và cùng khám phá bí quyết làm giàu của những người nổi tiếng.',
            'avatar' => 'phat_trien_ban_than_14.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 20.000,
            'author' => 'Thomas J. Stanley, William D. Danko',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Những nguyên tắc vàng của Napoleon Hill',
            'description' => 'Những nguyên tắc vàng của Napoleon Hill  là tập hợp những bài viết của chính tác giả Napoleon Hill trong khoảng thời gian từ năm 1919 đến năm 1923. "Những nguyên tắc vàng" mà ông đưa ra chính là chiếc chìa khóa hữu dụng trong mọi thời đại, đưa độc giả đến với thành công bằng phương pháp mang tính thực tiễn cao.
            Napoleon Hill là một tác giả được nhiều người yêu mếm và có số lượng lớn các quyển sách nổi tiếng viết về đề tài phát triển tiềm năng con người, giúp hàng triệu người đạt được thành công.
            "Hãy đọc Những nguyên tắc vàng của Napoleon Hill và thay đổi cuộc đời bạn"',
            'avatar' => 'phat_trien_ban_than_15.jpg',
            'pro_att_id' => 'Phát triển bản thân, Khoa học xã hội',
            'pro_cate_id' => 'Sách nói',
            'price' => 22.000,
            'author' => 'Napoleon Hill',
            'pro_pub_id' => 'NXB Trẻ',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Mộ Khâu Tử - Tập 1',
            'description' => 'Ở vùng quê lạc hậu của Trung Quốc vẫn còn tồn tại hủ tục mang người tròn 60 tuổi còn sống nhốt vào Khâu Tử Mồ (Mộ Khâu Tử) và con cái sẽ mang cơm đến mộ trong vòng 100 ngày. Mỗi lần đến sẽ đặt thêm một viên gạch để lấp kín ngôi mộ đó. 
            Đã từng có những người cố tình làm sai với luật lệ cổ hủ này và kỳ lạ thay cả nhà đều phải hứng chịu những tai ương chết chóc bệnh tật khủng khiếp. Kể từ đó, dân làng không ai dám làm trái lại với phong tục hà khắc này nữa.
            Viễn Dương được sinh ra từ một ngồi Mộ Khâu Tử như thế. Ngày đó, dân làng thấy tiếng khóc phát ra từ một ngôi mộ bèn dỡ gạch ra xem thì phát hiện một người ông cụ 60 tuổi đang ở trần cùng một người phụ nữ trẻ tuổi và một đứa mới lọt lòng. Từ khi mới sinh ra, Viễn Dương đã bị coi là điềm không lành của dân làng nên bị đuổi khỏi chính quê hương của mình. Vượt qua số mệnh trắc trở, lang bạt tứ hải, ra nam vào bắc, Viễn Dương đã từng bước vạch trần những bí mật sâu xa lừa dối con người mà cha ông để lại.',
            'avatar' => 'truyen_doc_1.jpg',
            'pro_att_id' => 'Truyện đọc, Kinh dị, Truyện ma tâm linh',
            'pro_cate_id' => 'Sách nói',
            'price' => 22.000,
            'author' => 'Hà Đăng',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Hoàng Hà phục yêu truyện - Tập 1',
            'description' => 'Hoàng Hà chảy về phía đông trăm ngàn năm, dưới đáy sông chôn dấu vô số bí mật không thể để cho người sống biết.
            Vào một thời kì xã hội loạn lạc, Hoàng Hà ngủ yên không biết bao nhiêu năm bỗng nổi lên một chiếc quan tài mục nát, trong quan tài là thi thể của một đứa bé gái, kì lạ thay thi thể này lại có thể lớn lên...
            Điều kỳ lạ là khi xác chết được vớt lên thuyền, chỉ một mình Trần Lục Cân là người dùng áo của mình đắp cho thi thể đang trần chuồng kia và không hề xúc phạm đến cô ta như những người cùng thuyền khác mà cậu lại bị cô ta đeo báo đến mức "sống không bằng chết".
            Nguyên nhân là gì? Rồi cuộc đời của Trần Lục Cân sẽ ra sao?',
            'avatar' => 'truyen_doc_2.jpg',
            'pro_att_id' => 'Truyện đọc, Kinh dị, Truyện ma tâm linh',
            'pro_cate_id' => 'Sách nói',
            'price' => 20.000,
            'author' => 'Long Phi Có Yêu Khí',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Đốt cháy băng giá',
            'description' => 'Nếu bạn là cô gái Dusty, nghe tiếng con trai lạ mặt tự nhận là người anh trai Josh mất tích bấy lâu của mình, bạn sẽ hoảng loạn và gọi điện cho cảnh sát? Bạn sẽ khóc oà và chạy vào phòng bố? Bạn sẽ cố ngủ vùi để quên đi giọng nói đầy ám ảnh? Bạn sẽ chạy thẳng vào trong cơn bão tuyết để rồi bị nhấn chìm trong màn đêm đen thẳm? Hay là...
            Đợi chờ tới đêm mai,
            Giữa màn đêm mịt mùng, khi bão tuyết gào rú,
            Chuông điện thoại lại reo...
            Và người con trai lạ mặt ấy, vẫn đợi bạn...!
            Sự xuất hiện của cậu bé kì lạ với cuộc điện thoại mỗi đêm khuya đã làm thay đổi cuộc đời Dusty. Những nghi ngờ và rượt đuổi, những bí mật kinh khủng được giấu kín, những sự thật không ai muốn phơi bày, sự sống dậy của một linh hồn tội lỗi... Tất cả cùng cuốn theo mạch câu chuyện để rồi ẩn số tưởng chừng không thể được giải mã dần hé lộ trong ánh sáng ảm đạm của buổi sáng mùa đông sau cơn bão tuyết điên cuồng...
            Không chỉ là một chuỗi kịch tính khiến bạn chẳng thể rời khỏi trang sách, Đốt Cháy Băng Giá còn mang một ý nghĩa nhân văn to lớn, mà chỉ đến những tình tiết cuối cùng người đọc mới nhận ra.
            Được thừa nhận về mặt ý tưởng cũng như cách kể chuyện lôi cuốn, Đốt Cháy Băng Giá của tác giả trẻ Tim Bowler đã gặt hái được rất nhiều giải thưởng về Sách hàng đầu như: Giải thưởng Sách Hull 2007, Giải thưởng Sách Highland 2007, Giải thưởng Sách Redbridge 2007, Giải thưởng Sách Trường Stockport 2007, Giải thưởng Sách Teen South Lanarkshire 2008, Giải thưởng Trường Sách Southern 2009, v.v. ...
            Nếu bạn là một tín đồ của viễn tưởng và kinh dị, Đốt Cháy Băng Giá chính là lựa chọn hàng đầu cho các bạn độc giả trẻ tuổi. Nếu tiết trời đang rét buốt, tốt thôi, hãy chuẩn bị một tách trà thật nóng, một góc quán thật tĩnh mịch, để hoà mình vào từng nhịp thở dồn dập của Đốt Cháy Băng Giá bạn nhé. Và nhớ là:
            Đốt Cháy Băng Giá không dành cho những cô nàng yếu tim!',
            'avatar' => 'truyen_doc_3.jpg',
            'pro_att_id' => 'Truyện đọc, Kinh dị',
            'pro_cate_id' => 'Sách nói',
            'price' => 20.000,
            'author' => 'Tim Bowler',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Thiên vũ - Tập 1: Ma vân thư viện',
            'description' => 'Tọa lạc trên dãy Chung Nam bảng lảng mây mờ và khói tím, Ma Vân thư viện là học viện đào tạo văn, võ và kỳ môn độn giáp lừng danh nhất Đại Đường. Cứ mười năm trường mới tuyển chọn sinh đồ một lần, đa phần những người trúng tuyển đều xuất thân danh gia vọng tộc, hoặc lắm tiền nhiều của, hoặc văn võ song toàn.
            Nhưng năm nay, người đầu tiên thi đỗ rồi nghiễm nhiên bước lên bảo tọa đại sư huynh lại là Lý Huyền, một tiểu tử lang bạt, thi từ ca phú không biết, kiếm giáo đao cung chẳng thông. Bù lại, gã ta cực kỳ mưu trí, cực kỳ tự tin, tin rằng ai cũng có sở trường ưu điểm của riêng mình. Ngày bước vào Ma Vân thư viện là ngày cuộc đời vô tư lự của gã sang trang, nào trổ tài khuất phục bọn con ông cháu cha, nào xoay xở xử trí một mối tình nan giải, để rồi ngẫu nhiên dấn thân vào một bí mật về bùa yểm đã lưu truyền suốt trăm năm ở Đại Đường...',
            'avatar' => 'truyen_doc_4.jpg',
            'pro_att_id' => 'Truyện đọc, Kiếm hiệp',
            'pro_cate_id' => 'Sách nói',
            'price' => 20.000,
            'author' => 'Bộ Phi Yên',
            'pro_pub_id' => 'NXB Văn Học',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Nơi giấc mơ em thuộc về',
            'description' => 'Tác phẩm xoay quanh chuyện tình giữa hai nhân vật chính là Tiểu Vũ và Phôn. Cha mất do một tai nạn, Tiểu Vũ lớn lên trong sự bao bọc của mẹ, với gia sản kếch xù cha để lại.
            Cô gặp Phôn từ ngày này - ngày cha cô mất - rồi thất lạc nhau đến tận khi cả hai đều du học ở nước ngoài. Họ yêu nhau chân thành và sẵn sàng hy sinh cho nhau tất cả.
            Rồi, khi mẹ Tiểu Vũ có tình yêu - người đàn ông đến với bà bằng những toan tính vật chất - Tiểu Vũ đã chống lại và bị tai nạn xe, liệt nửa người, mất trí theo sự sắp đặt của cô để kéo dài thời gian cho mọi sự.
            Chính trong những lúc này, Tiểu Vũ nhận ra, tình yêu là một sức mạnh phi thường, giúp con người ta vượt qua tất cả mọi thứ. Dẫu cô cố tránh né, Phôn vẫn yêu, vẫn hy vọng, đợi chờ. Vượt qua mọi khó khăn, trở ngại, cuối cùng họ vẫn có thể cùng nắm tay nhau chạm đến hạnh phúc trọn vẹn.',
            'avatar' => 'truyen_doc_5.jpg',
            'pro_att_id' => 'Truyện đọc, Truyện dài - Tiểu thuyết, Văn học',
            'pro_cate_id' => 'Sách nói',
            'price' => 24.000,
            'author' => 'Nhóm 4.0',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Công tử Liên Thành',
            'description' => 'Sau một lần thăng cấp với quy mô lớn, game online "Truyền Thuyết Anh Hùng" mở hệ thống thành chiến, đồng thời chuẩn bị tiến hành PK liên server mang tính toàn quốc, chỉ trong thời gian ngắn phát triển ào ào như vũ bão, giới giang hồ vốn đang trào dâng như thuỷ triều giờ lại dấy lên những đợt sóng cao ngất trời.
            Trong server có tên là Thịnh Thế, đệ nhất bang phái nổi tiếng là Khải Hoàn Hào Môn có tứ đại công tử – Công Tử Tiểu Bạch, Công Tử Liên Thành, Công Tử Vô Kỵ, Công Tử Phù Tô, đều là những nhân vật có thực lực mạnh mẽ, kiêu dũng thiện chiến.
            Mà Nhất Tiếu Hồng Trần, bang chủ của đệ nhất tài phú bang nổi tiếng, cũng là đệ nhất "Tài Nữ" của server này có được sự quý mến coi trọng của tứ công tử, có mối giao tình không đơn giản với họ. Trải qua một loạt trận PK bang phái trong server, đấu đá nhau công khai và ngấm ngầm, Khải Hoàn Hào Môn cuối cùng cũng bộc lộ được toàn bộ tài năng. Tứ công tử cùng nhau xuất chinh, quyết chiến Tử Cấm Chi Điện, và cuối cùng ai sẽ là người ôm được người đẹp trở về đây?',
            'avatar' => 'truyen_doc_6.jpg',
            'pro_att_id' => 'Truyện đọc, Ngôn tình, Hiện đại',
            'pro_cate_id' => 'Sách nói',
            'price' => 24.000,
            'author' => 'Mãn Tọa Y Quan Thắng Tuyết',
            'pro_pub_id' => 'NXB Lao Động',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Sống chung với mẹ chồng',
            'description' => 'Diệp Hy Lôi, cô con dâu 8X, xinh đẹp, thông minh nhưng cũng lười biếng và ham hư vinh, trong mắt mẹ chồng, cô vẫn chưa thể hoàn thành vai trò của một người con dâu.
            Phương Xảo Trân, mẹ chồng thuộc thế hệ 5X, hiền lành, chăm chỉ, là mẹ chồng nhưng vẫn chưa biết cách phải cư xử với con dâu như thế nào.
            Hứa Bân, cậu con trai 8X, đứng giữa người vợ mình yêu thương và người mẹ mà mình luôn quan tâm, giữa tình yêu và tình thân, cuối cùng anh đã đánh mất đi tình yêu của mình, chính tay hủy hoại tình yêu.
            Một cuộc giao tranh giữa mẹ chồng và nàng dâu, một sự lựa chọn khó khăn giữa tình yêu và tình thân, có cả niềm vui và nỗi buồn. Những bà mẹ chồng tương lai, hãy đọc cuốn sách này, để bạn sống cởi mở hơn; những cô dâu mới về nhà chồng, hãy đọc cuốn sách này để có thêm lời cảnh tỉnh; người đàn ông bị kẹt giữa mẹ chồng và nàng dâu, cũng nên đọc cuốn sách này để biết rằng, trong hôn nhân, tình yêu xếp phía sau, trí tuệ mới là trên hết.
            Sống chung với mẹ chồng cũng đã được chuyển thể thành phim truyền hình Việt Nam và hiện đang phát sóng trên kênh VTV1. Bộ phim cũng đã và đang tạo nên sức nóng về chủ đề muôn thuở Mẹ chồng - Nàng dâu.',
            'avatar' => 'truyen_doc_7.jpg',
            'pro_att_id' => 'Truyện đọc, Ngôn tình, Hiện đại',
            'pro_cate_id' => 'Sách nói',
            'price' => 24.000,
            'author' => 'Mãn Tọa Y Quan Thắng Tuyết',
            'pro_pub_id' => 'NXB Văn Học',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Kén cá chọn canh ( Tập 1)',
            'description' => 'Tóm tắt nội dung sách "Kén Cá Chọn Canh"
            Kén cá chọn canh mãi mà vẫn không thể hài lòng. Nhắm mắt lại, người trong lòng bạn là ai? Mở mắt ra, là ai đang ở bên cạnh bạn?
            "Kén Cá Chọn Canh" của tác giả Tùy Hầu Châu kể về câu chuyện của Lục công tử, sau khi học xong MBA ở nước ngoài, trừ việc mang về một mớ bằng cấp còn dắt theo một đứa bé, đã thế lại còn là con ruột, đứa bé mới độ một tuổi. Lục Cảnh Diệu không để ý tới sự phản đối của bố mẹ, gióng trống khua chiêng tổ chức tiệc đầy tuổi hoành tráng. 
            Được ba tuổi, Tiểu Duệ Duệ nhèo nhẽo một câu: “Ba ơi, rốt cuộc con từ đâu ra?” 
            Lục Cảnh Diệu bực mình đáp: “Trúng thưởng!” 
            Thì ra mình chỉ là phần thưởng, Duệ Duệ bé nhỏ đau đớn, lặng lẽ gói ghém chuẩn bị bỏ nhà đi. 
            Thực ra, đây chỉ là câu chuyện về chú nòng nọc con tìm mẹ thôi mà.',
            'avatar' => 'truyen_doc_8.jpg',
            'pro_att_id' => 'Truyện đọc, Ngôn tình, Hiện đại',
            'pro_cate_id' => 'Sách nói',
            'price' => 30.000,
            'author' => 'Tùy Hầu Châu',
            'pro_pub_id' => 'NXB Văn Học',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Kén cá chọn canh (Tập 2)',
            'description' => 'Tóm tắt nội dung sách "Kén Cá Chọn Canh"
            Kén cá chọn canh mãi mà vẫn không thể hài lòng. Nhắm mắt lại, người trong lòng bạn là ai? Mở mắt ra, là ai đang ở bên cạnh bạn?
            "Kén Cá Chọn Canh" của tác giả Tùy Hầu Châu kể về câu chuyện của Lục công tử, sau khi học xong MBA ở nước ngoài, trừ việc mang về một mớ bằng cấp còn dắt theo một đứa bé, đã thế lại còn là con ruột, đứa bé mới độ một tuổi. Lục Cảnh Diệu không để ý tới sự phản đối của bố mẹ, gióng trống khua chiêng tổ chức tiệc đầy tuổi hoành tráng. 
            Được ba tuổi, Tiểu Duệ Duệ nhèo nhẽo một câu: “Ba ơi, rốt cuộc con từ đâu ra?” 
            Lục Cảnh Diệu bực mình đáp: “Trúng thưởng!” 
            Thì ra mình chỉ là phần thưởng, Duệ Duệ bé nhỏ đau đớn, lặng lẽ gói ghém chuẩn bị bỏ nhà đi. 
            Thực ra, đây chỉ là câu chuyện về chú nòng nọc con tìm mẹ thôi mà.',
            'avatar' => 'truyen_doc_9.jpg',
            'pro_att_id' => 'Truyện đọc, Ngôn tình, Hiện đại',
            'pro_cate_id' => 'Sách nói',
            'price' => 30.000,
            'author' => 'Tùy Hầu Châu',
            'pro_pub_id' => 'NXB Văn Học',
            'sale' => '10%'
        ]);
        Product::create([
            'name' => 'Chạm yêu',
            'description' => 'Là một tác giả trẻ, thấu hiểu và có cách biểu đạt tinh tế cảm xúc trong những chi tiết dí dỏm, bất ngờ, "Chạm yêu" của Sarah Dessen gặt hái được rất nhiều thành công và được đón nhận.
            Chạm yêu là câu chuyện về một cô gái cuối cùng cũng có thể đưa tay chạm vào yêu thương lần nữa, sau bao lần rụt rè, bao lần trái tim vỡ vụn, mềm yếu và nhút nhát, một cô gái luôn khẳng định trái tim mình làm bằng thép, trong khi có một chàng trai cố sức phủ nhận điều đó.
            Remy là một cô gái cá tính, tự tin, luôn biết từ chối các chàng trai theo đuổi cô khi đúng thời điểm, lúc cô không muốn lún quá sâu vào một mối quan hệ yêu đương mà chẳng biết khi nào nó sẽ đổ vỡ. Mẹ cô là tấm gương cô sợ phải soi vào: bốn đời chồng và đang chuẩn bị tiến hành đám cưới lần thứ năm. Thế rồi cô gặp Dexter, bản sao gần như hoàn hảo của cha cô, bừa bãi, không biết sắp xếp, bốc đồng và tệ hơn hết, cũng là một nhạc sĩ. Những dự định tương lai đang diễn ra theo đúng ý cô muốn, một vị trí tốt tại ngôi trường Stanford danh tiếng, nhưng kỳ lạ thay, mối quan hệ với Dexter khó hiểu đến mức việc chia tay anh làm cô thật sự bối rối. Liệu cuối cùng, cô đã nhận ra được ý nghĩa của những bài tình ca?',
            'avatar' => 'truyen_doc_10.jpg',
            'pro_att_id' => 'Truyện đọc, Truyện dài - Tiểu thuyết',
            'pro_cate_id' => 'Sách nói',
            'price' => 30.000,
            'author' => 'Sarah Dessen',
            'pro_pub_id' => 'NXB Thời Đại',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Trên lan can',
            'description' => 'Hai mươi truyện trong tập truyện ngắn Trên lan can, được tập hợp từ những truyện ngắn đã đăng trên các báo học trò cách đây gần mười năm, đọc lại, vẫn thấy cảm động, lôi cuốn trong từng câu chữ. Thế giới tuổi học trò của tác giả không chỉ là chuỗi ngày hồn nhiên, êm đềm bên gia đình, bè bạn mà ẩn chứa những khát khao; khát khao được thông cảm, khát khao được thoát ly khỏi cái thế giới nhàm chán của chính mình và đặc biệt là khát khao lẽ phải ở cuộc sống vốn còn nhiều những bất công
            Con còng, Nắng không của mặt trời, Từng nấc thang rớt lại, Kẻ bị quỷ ám... Bằng ngòi bút sắc bén của mình, tác giả đẩy người đọc lên đến tận cùng của nỗi đau, mất mát, hoài nghi khi đối diện với thực tế không trong xanh như tuổi thơ.
            Song Khê có cách viết lột tả đến tận cùng vấn đề, cảm xúc. Cái được nhất trong cách viết của tác giả trẻ này là ở cách kết thúc truyện. Chị không để đoạn kết rơi vào nặng nề mà luôn mở ra một chân trời mới, tươi hơn, rộng lớn hơn giúp nhân vật cũng như người đọc trở lại với niềm hạnh phúc được sống, được cống hiến.',
            'avatar' => 'truyen_doc_11.jpg',
            'pro_att_id' => 'Truyện đọc, Truyện dài - Tiểu thuyết',
            'pro_cate_id' => 'Sách nói',
            'price' => 30.000,
            'author' => 'Song Khê',
            'pro_pub_id' => 'NXB Thời Đại',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Chó dẫn đường - Đại gia và nhân quả',
            'description' => 'Nếu Cầu Vồng Trong Đêm là kết quả của sự xử lý tinh tế nguồn tư liệu thực tế dồi dào mà M. Samarsky đã dày công sưu tập cộng với các chi tiết hư cấu được đưa vào khá nhuần nhuyễn thì ở Chó Dẫn Đường, Đại Gia Và Nhân Quả, ngoài những yếu tố trên, trí tưởng tượng phong phú của tác giả đã góp phần quyết định làm nên thành công cho tác phẩm. Những tình tiết ly kỳ, những chi tiết hấp dẫn đắt giá không thể có được trong bất cứ tư liệu thực tế nào, chỉ có thể là sản phẩm của năng lực tưởng tượng phi thường mà thôi. Tưởng tượng đấy, hư cấu đấy, nhưng rất sinh động, rất đời, rất thực. Và quan trọng nhất - rất nhân ái, nhân văn, nhân bản.
            Một con chó bị lừa đưa ra khỏi Trường đào tạo chó dẫn đường ư? Bình thường! Nhưng mục đích cú lừa này là gì? Để lấy buồng gan của nó cấy ghép cho con chó cưng của một đại gia. Khác thường! Đại gia nọ vô cùng độc đoán, hung dữ, nhưng bà vợ cúa ông ta là người nhân hậu, đã tìm cách cứu thoát con chó vô tội, dù biết rằng mình có thể sẽ phải đối đầu với ỏng chồng "bạo chúa". Đó là chuyện bình thường. Nhưng phương cách cứu chó của bà ấy mới thực sự khác thường. Khi "âm mưu lừa dối" bị bại lộ, trong cơn tức giận, đại gia "bạo chúa" nọ đã ra lệnh bắn chết con chó. Chuyện không bình thường, vì con chó chẳng có tội lỗi gì trong "âm mưu" này cả. Nhưng người thực thi mệnh lệnh đã tìm cách qua mặt ông chủ để cứu sống con chó. Âu cũng chuyện bình thường, vì đó là "mệnh lệnh" của lương tâm.
            Nhưng bước ngoặt khác thường lớn nhất là khi vị đại gia nọ gặp tai nạn, bị mù, chính con chó mà ông ta từng ra lệnh giết chết lại trở thành chó dẫn đường cho ông, trở thành một người bạn bốn chân trung thành và thân thiết nhất của ông. Lời sám hối của vị đại gia ớ cuối sách cho thấy lòng nhân luôn tiềm ẩn trong mỗi con người, dù có khi họ độc ác, tàn nhẫn đến đâu đi nữa. Chó Dẫn Đường, Đại Gia Và Nhân Quả không chỉ là một cuốn truyện hành động đầy gay cấn, hấp dẫn, với những pha thoát hiểm ngoạn mục trong đường tơ kẽ tóc mà còn là một câu chuyện tình người, một lời cảnh tỉnh đối với những ai đã lỡ đánh mất lòng nhân, chớ nên nhắm mắt chạy theo đồng tiền và niềm vui vật chất mà quên mất rằng sống trên đời cần quan tâm giúp đờ cộng đồng, giúp đỡ những số phận đáng thương, bất hạnh. Gieo nhân nào ắt gặt quả ấy. Chó Dẫn Đường, Đại Gia Và Nhân Quả được độc giả và giới phê bình văn học Nga đánh giá cao.
            Chó Dẫn Đường, Đại Gia Và Nhân Quả là một tuyệt tác. Tác giả Mikhail Samarsky là một con người đặc biệt. Tài năng văn chương và ý thức thiện nguyện phục vụ cộng đồng người khiếm thị của Míkhail rất đáng khâm phục. Tác phẩm của Mikhail không chỉ thuyết phục tuyệt đối giới phê bình văn học mà còn đánh động được con tim người đọc. Đó chính là phần thưởng lớn nhất cho người sáng tác.” (Nghệ sĩ nhân dân Philipp Kirkorov)
            “Một tác phẩm giàu kịch tính và đầy chất nhân văn. Tác giả ở tuổi vị thành niên mà viết được như vậy quả là rất đáng khen, rất đáng trân trọng.”',
            'avatar' => 'truyen_doc_12.jpg',
            'pro_att_id' => 'Truyện đọc, Truyện dài - Tiểu thuyết',
            'pro_cate_id' => 'Sách nói',
            'price' => 30.000,
            'author' => 'Mikhail Samarsky',
            'pro_pub_id' => 'NXB Thời Đại',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Không thể chạm vào em',
            'description' => 'Cuốn tiểu thuyết danh cho những người muốn tìm kiếm một tình yêu thực sự.
            Mỗi con người sinh ra trên đời này, dù ở giới tính nào đi chăng nữa thì đều là những món quà kỳ diệu của tự nhiên; và không có tình yêu nào là bất thường, mọi giới hạn trong tình yêu đều có thể được bỏ qua nếu chúng ta dành cho nhau những cảm xúc yêu thương thực sự.
            Câu chuyện của Trần Kha và Miên Tú trong "Không thể chạm vào em" sẽ chạm tới những cảm xúc nơi sâu nhất của chúng ta, giúp chúng ta nhận ra rằng khát khao về một tình yêu thuần khiết không chỉ tồn tại trong cộng đồng những người đồng tính, vô tính; mà thậm chí nó hiện hữu trong chính tâm hồn mỗi người.
            Trên đời này, liệu có người nào khiến cho bạn sẵn sàng hy sinh tất cả để bên nhau một đời?',
            'avatar' => 'truyen_doc_13.jpg',
            'pro_att_id' => 'Truyện đọc, Truyện dài - Tiểu thuyết, Văn học',
            'pro_cate_id' => 'Sách nói',
            'price' => 30.000,
            'author' => 'Nhóm 4.0',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Tôi học đại học',
            'description' => '"Rất nhiều nguyên mẫu cuộc sống đã trở thành hình tượng điển hình trong tác phẩm nghệ thuật. Vì thế không có gì lạ, nơi mỗi trang viết, Nguyễn Ngọc Ký cứ kể những người thực, việc thực như nó vốn có mà đọc lên thấy lấp lánh những tâm hồn đẹp, những tấm lòng cao cả, càng trong gian nan càng bừng sáng sự chí tình, chí nghĩa vì nhau.
            Audio này là lời tri ân ngọt ngào anh gửi tới các thầy cô, bạn bè khoa Ngữ văn, Đại học Tổng hợp Hà Nội, gửi tới những miền đất sâu nặng nghĩa tình đã rộng vòng tay cưu mang anh trong suốt bốn năm học sơ tán với bao gian nan thử thách.',
            'avatar' => 'truyen_doc_14.jpg',
            'pro_att_id' => 'Truyện đọc, Truyện dài - Tiểu thuyết, Văn học',
            'pro_cate_id' => 'Sách nói',
            'price' => 22.000,
            'author' => 'Nguyễn Ngọc Ký',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Những quyết định thay đổi cuộc sống',
            'description' => 'Trong cuộc sống, không ít lần bạn phải đứng trước sự lựa chọn khó khăn khi phải quyết định một vấn đề nào đó. Có lúc bạn chỉ dựa theo Cảm tính của mình, nhưng có những quyết định quan trọng mà bạn cần phải suy nghĩ và cân nhắc... Cuộc sống của bạn với những niềm vui hay nỗi buồn, hạnh phúc hay bất hạnh, thành công hay thất bại...đều phụ thuộc vào những quyết định của bạn. Audio đặc biệt này sẽ giúp bạn cách để có những quyết định đúng đắng và sáng suốt, giúp bạn thành công và hạnh phúc hơn trong cuộc sống.',
            'avatar' => 'truyen_doc_15.jpg',
            'pro_att_id' => 'Truyện đọc, Truyện dài - Tiểu thuyết, Văn học',
            'pro_cate_id' => 'Sách nói',
            'price' => 22.000,
            'author' => 'Spencer Johnson',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Happy Reader - The Merchant of Venice (Người lái buôn thành Venice)',
            'description' => 'Những câu chuyện cổ tích, những kiệt tác văn học tuyệt vời mà chúng ta đã biết từ thuở còn thơ vẫn luôn là kỷ niệm ấm áp mãi cho đến khi ta trưởng thành. Giờ đây, các tác phẩm văn học kinh điển được thể hiện dưới một hình thức mới mẻ và thú vị sẽ giúp ta làm sống lại những kỷ niệm đó. Bên cạnh đó, ta còn có thể thưởng thức sự sâu sắc và vẻ đẹp của những tác phẩm nguyên bản, điều mà các tác phẩm chuyển ngữ ít khi thực hiện được. Trong quá trình đọc sách, kỹ năng nghe hiểu tiếng Anh của bạn cũng sẽ được nâng cao rất nhiều.
            Bộ sách được biên soạn theo một chương trình đặc biệt giúp nâng cao kỹ năng đọc hiểu cho những người mới bắt đầu, những người chưa hài lòng với khả năng làm chủ ngôn ngữ của mình, hay cho học sinh cấp tiểu học, trung học cơ sở và phổ thông. Những học viên này sẽ thưởng thức các kiệt tác văn học bằng tiếng Anh theo một hình thức rất thú vị và có tính hiệu quả cao.
            Chương trình được biên soạn theo năm cấp độ, từ cấp độ cơ bản dành cho những người mới bắt đầu, với 350 từ, cho đến cấp độ trung bình khá, với 1.000 từ. Trong từng tập sách đều có các hướng dẫn dành cho người đọc theo từng cấp độ, giúp họ tiếp cận nội dung tác phẩm bằng tiếng Anh một cách dễ dàng hơn.',
            'avatar' => 'truyen_thieu_nhi_1.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 26.000,
            'author' => 'William Shakespeare',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Happy Reader - Tolstoy`s Short Stories (Tuyển tập truyện ngắn của Tolstoy)',
            'description' => 'Những câu chuyện cổ tích, những kiệt tác văn học tuyệt vời mà chúng ta đã biết từ thuở còn thơ vẫn luôn là kỷ niệm ấm áp mãi cho đến khi ta trưởng thành. Giờ đây, các tác phẩm văn học kinh điển được thể hiện dưới một hình thức mới mẻ và thú vị sẽ giúp ta làm sống lại những kỷ niệm đó. Bên cạnh đó, ta còn có thể thưởng thức sự sâu sắc và vẻ đẹp của những tác phẩm nguyên bản, điều mà các tác phẩm chuyển ngữ ít khi thực hiện được. Trong quá trình đọc sách, kỹ năng nghe hiểu tiếng Anh của bạn cũng sẽ được nâng cao rất nhiều.
            Bộ sách được biên soạn theo một chương trình đặc biệt giúp nâng cao kỹ năng đọc hiểu cho những người mới bắt đầu, những người chưa hài lòng với khả năng làm chủ ngôn ngữ của mình, hay cho học sinh cấp tiểu học, trung học cơ sở và phổ thông. Những học viên này sẽ thưởng thức các kiệt tác văn học bằng tiếng Anh theo một hình thức rất thú vị và có tính hiệu quả cao.
            Chương trình được biên soạn theo năm cấp độ, từ cấp độ cơ bản dành cho những người mới bắt đầu, với 350 từ, cho đến cấp độ trung bình khá, với 1.000 từ. Trong từng tập sách đều có các hướng dẫn dành cho người đọc theo từng cấp độ, giúp họ tiếp cận nội dung tác phẩm bằng tiếng Anh một cách dễ dàng hơn.',
            'avatar' => 'truyen_thieu_nhi_2.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 24.000,
            'author' => 'Lev Tolstoy',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Happy Reader - The story of Helen Keller (Câu chuyện về cuộc đời của Helen Keller)',
            'description' => 'Những câu chuyện cổ tích, những kiệt tác văn học tuyệt vời mà chúng ta đã biết từ thuở còn thơ vẫn luôn là kỷ niệm ấm áp mãi cho đến khi ta trưởng thành. Giờ đây, các tác phẩm văn học kinh điển được thể hiện dưới một hình thức mới mẻ và thú vị sẽ giúp ta làm sống lại những kỷ niệm đó. Bên cạnh đó, ta còn có thể thưởng thức sự sâu sắc và vẻ đẹp của những tác phẩm nguyên bản, điều mà các tác phẩm chuyển ngữ ít khi thực hiện được. Trong quá trình đọc sách, kỹ năng nghe hiểu tiếng Anh của bạn cũng sẽ được nâng cao rất nhiều.
            Bộ sách được biên soạn theo một chương trình đặc biệt giúp nâng cao kỹ năng đọc hiểu cho những người mới bắt đầu, những người chưa hài lòng với khả năng làm chủ ngôn ngữ của mình, hay cho học sinh cấp tiểu học, trung học cơ sở và phổ thông. Những học viên này sẽ thưởng thức các kiệt tác văn học bằng tiếng Anh theo một hình thức rất thú vị và có tính hiệu quả cao.
            Chương trình được biên soạn theo năm cấp độ, từ cấp độ cơ bản dành cho những người mới bắt đầu, với 350 từ, cho đến cấp độ trung bình khá, với 1.000 từ. Trong từng tập sách đều có các hướng dẫn dành cho người đọc theo từng cấp độ, giúp họ tiếp cận nội dung tác phẩm bằng tiếng Anh một cách dễ dàng hơn.',
            'avatar' => 'truyen_thieu_nhi_3.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 27.000,
            'author' => 'Brian J. Stuart',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Happy Reader - The secret garden (Khu vườn bí mật)',
            'description' => 'Những câu chuyện cổ tích, những kiệt tác văn học tuyệt vời mà chúng ta đã biết từ thuở còn thơ vẫn luôn là kỷ niệm ấm áp mãi cho đến khi ta trưởng thành. Giờ đây, các tác phẩm văn học kinh điển được thể hiện dưới một hình thức mới mẻ và thú vị sẽ giúp ta làm sống lại những kỷ niệm đó. Bên cạnh đó, ta còn có thể thưởng thức sự sâu sắc và vẻ đẹp của những tác phẩm nguyên bản, điều mà các tác phẩm chuyển ngữ ít khi thực hiện được. Trong quá trình đọc sách, kỹ năng nghe hiểu tiếng Anh của bạn cũng sẽ được nâng cao rất nhiều.
            Bộ sách được biên soạn theo một chương trình đặc biệt giúp nâng cao kỹ năng đọc hiểu cho những người mới bắt đầu, những người chưa hài lòng với khả năng làm chủ ngôn ngữ của mình, hay cho học sinh cấp tiểu học, trung học cơ sở và phổ thông. Những học viên này sẽ thưởng thức các kiệt tác văn học bằng tiếng Anh theo một hình thức rất thú vị và có tính hiệu quả cao.
            Chương trình được biên soạn theo năm cấp độ, từ cấp độ cơ bản dành cho những người mới bắt đầu, với 350 từ, cho đến cấp độ trung bình khá, với 1.000 từ. Trong từng tập sách đều có các hướng dẫn dành cho người đọc theo từng cấp độ, giúp họ tiếp cận nội dung tác phẩm bằng tiếng Anh một cách dễ dàng hơn.',
            'avatar' => 'truyen_thieu_nhi_4.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 30.000,
            'author' => 'Frances Hodgson Burnett',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Happy Reader - Daddy Long Legs (Nhện chân dài)',
            'description' => 'Những câu chuyện cổ tích, những kiệt tác văn học tuyệt vời mà chúng ta đã biết từ thuở còn thơ vẫn luôn là kỷ niệm ấm áp mãi cho đến khi ta trưởng thành. Giờ đây, các tác phẩm văn học kinh điển được thể hiện dưới một hình thức mới mẻ và thú vị sẽ giúp ta làm sống lại những kỷ niệm đó. Bên cạnh đó, ta còn có thể thưởng thức sự sâu sắc và vẻ đẹp của những tác phẩm nguyên bản, điều mà các tác phẩm chuyển ngữ ít khi thực hiện được. Trong quá trình đọc sách, kỹ năng nghe hiểu tiếng Anh của bạn cũng sẽ được nâng cao rất nhiều.
            Bộ sách được biên soạn theo một chương trình đặc biệt giúp nâng cao kỹ năng đọc hiểu cho những người mới bắt đầu, những người chưa hài lòng với khả năng làm chủ ngôn ngữ của mình, hay cho học sinh cấp tiểu học, trung học cơ sở và phổ thông. Những học viên này sẽ thưởng thức các kiệt tác văn học bằng tiếng Anh theo một hình thức rất thú vị và có tính hiệu quả cao.
            Chương trình được biên soạn theo năm cấp độ, từ cấp độ cơ bản dành cho những người mới bắt đầu, với 350 từ, cho đến cấp độ trung bình khá, với 1.000 từ. Trong từng tập sách đều có các hướng dẫn dành cho người đọc theo từng cấp độ, giúp họ tiếp cận nội dung tác phẩm bằng tiếng Anh một cách dễ dàng hơn.',
            'avatar' => 'truyen_thieu_nhi_5.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 26.000,
            'author' => 'Jean Webster',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Happy Reader - The Count of Monte Cristo (Bá tước Monte Cristo)',
            'description' => 'Những câu chuyện cổ tích, những kiệt tác văn học tuyệt vời mà chúng ta đã biết từ thuở còn thơ vẫn luôn là kỷ niệm ấm áp mãi cho đến khi ta trưởng thành. Giờ đây, các tác phẩm văn học kinh điển được thể hiện dưới một hình thức mới mẻ và thú vị sẽ giúp ta làm sống lại những kỷ niệm đó. Bên cạnh đó, ta còn có thể thưởng thức sự sâu sắc và vẻ đẹp của những tác phẩm nguyên bản, điều mà các tác phẩm chuyển ngữ ít khi thực hiện được. Trong quá trình đọc sách, kỹ năng nghe hiểu tiếng Anh của bạn cũng sẽ được nâng cao rất nhiều.
            Bộ sách được biên soạn theo một chương trình đặc biệt giúp nâng cao kỹ năng đọc hiểu cho những người mới bắt đầu, những người chưa hài lòng với khả năng làm chủ ngôn ngữ của mình, hay cho học sinh cấp tiểu học, trung học cơ sở và phổ thông. Những học viên này sẽ thưởng thức các kiệt tác văn học bằng tiếng Anh theo một hình thức rất thú vị và có tính hiệu quả cao.
            Chương trình được biên soạn theo năm cấp độ, từ cấp độ cơ bản dành cho những người mới bắt đầu, với 350 từ, cho đến cấp độ trung bình khá, với 1.000 từ. Trong từng tập sách đều có các hướng dẫn dành cho người đọc theo từng cấp độ, giúp họ tiếp cận nội dung tác phẩm bằng tiếng Anh một cách dễ dàng hơn.',
            'avatar' => 'truyen_thieu_nhi_6.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 32.000,
            'author' => 'Alexandre Dumas',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Happy Reader - Bible Stories 2 (Những câu chuyện Kinh Thánh - Tập 2)',
            'description' => 'Những câu chuyện cổ tích, những kiệt tác văn học tuyệt vời mà chúng ta đã biết từ thuở còn thơ vẫn luôn là kỷ niệm ấm áp mãi cho đến khi ta trưởng thành. Giờ đây, các tác phẩm văn học kinh điển được thể hiện dưới một hình thức mới mẻ và thú vị sẽ giúp ta làm sống lại những kỷ niệm đó. Bên cạnh đó, ta còn có thể thưởng thức sự sâu sắc và vẻ đẹp của những tác phẩm nguyên bản, điều mà các tác phẩm chuyển ngữ ít khi thực hiện được. Trong quá trình đọc sách, kỹ năng nghe hiểu tiếng Anh của bạn cũng sẽ được nâng cao rất nhiều.
            Bộ sách được biên soạn theo một chương trình đặc biệt giúp nâng cao kỹ năng đọc hiểu cho những người mới bắt đầu, những người chưa hài lòng với khả năng làm chủ ngôn ngữ của mình, hay cho học sinh cấp tiểu học, trung học cơ sở và phổ thông. Những học viên này sẽ thưởng thức các kiệt tác văn học bằng tiếng Anh theo một hình thức rất thú vị và có tính hiệu quả cao.
            Chương trình được biên soạn theo năm cấp độ, từ cấp độ cơ bản dành cho những người mới bắt đầu, với 350 từ, cho đến cấp độ trung bình khá, với 1.000 từ. Trong từng tập sách đều có các hướng dẫn dành cho người đọc theo từng cấp độ, giúp họ tiếp cận nội dung tác phẩm bằng tiếng Anh một cách dễ dàng hơn.',
            'avatar' => 'truyen_thieu_nhi_7.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 29.000,
            'author' => 'Brian J. Stuart',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Happy Reader - Bible Stories 1 (Những câu chuyện Kinh Thánh - Tập 1)',
            'description' => 'Những câu chuyện cổ tích, những kiệt tác văn học tuyệt vời mà chúng ta đã biết từ thuở còn thơ vẫn luôn là kỷ niệm ấm áp mãi cho đến khi ta trưởng thành. Giờ đây, các tác phẩm văn học kinh điển được thể hiện dưới một hình thức mới mẻ và thú vị sẽ giúp ta làm sống lại những kỷ niệm đó. Bên cạnh đó, ta còn có thể thưởng thức sự sâu sắc và vẻ đẹp của những tác phẩm nguyên bản, điều mà các tác phẩm chuyển ngữ ít khi thực hiện được. Trong quá trình đọc sách, kỹ năng nghe hiểu tiếng Anh của bạn cũng sẽ được nâng cao rất nhiều.
            Bộ sách được biên soạn theo một chương trình đặc biệt giúp nâng cao kỹ năng đọc hiểu cho những người mới bắt đầu, những người chưa hài lòng với khả năng làm chủ ngôn ngữ của mình, hay cho học sinh cấp tiểu học, trung học cơ sở và phổ thông. Những học viên này sẽ thưởng thức các kiệt tác văn học bằng tiếng Anh theo một hình thức rất thú vị và có tính hiệu quả cao.
            Chương trình được biên soạn theo năm cấp độ, từ cấp độ cơ bản dành cho những người mới bắt đầu, với 350 từ, cho đến cấp độ trung bình khá, với 1.000 từ. Trong từng tập sách đều có các hướng dẫn dành cho người đọc theo từng cấp độ, giúp họ tiếp cận nội dung tác phẩm bằng tiếng Anh một cách dễ dàng hơn.',
            'avatar' => 'truyen_thieu_nhi_8.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 29.000,
            'author' => 'Brian J. Stuart',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Happy Reader - Around the World in Eighty Days (Tám mươi ngày vòng quanh thế giới)',
            'description' => 'Những câu chuyện cổ tích, những kiệt tác văn học tuyệt vời mà chúng ta đã biết từ thuở còn thơ vẫn luôn là kỷ niệm ấm áp mãi cho đến khi ta trưởng thành. Giờ đây, các tác phẩm văn học kinh điển được thể hiện dưới một hình thức mới mẻ và thú vị sẽ giúp ta làm sống lại những kỷ niệm đó. Bên cạnh đó, ta còn có thể thưởng thức sự sâu sắc và vẻ đẹp của những tác phẩm nguyên bản, điều mà các tác phẩm chuyển ngữ ít khi thực hiện được. Trong quá trình đọc sách, kỹ năng nghe hiểu tiếng Anh của bạn cũng sẽ được nâng cao rất nhiều.
            Bộ sách được biên soạn theo một chương trình đặc biệt giúp nâng cao kỹ năng đọc hiểu cho những người mới bắt đầu, những người chưa hài lòng với khả năng làm chủ ngôn ngữ của mình, hay cho học sinh cấp tiểu học, trung học cơ sở và phổ thông. Những học viên này sẽ thưởng thức các kiệt tác văn học bằng tiếng Anh theo một hình thức rất thú vị và có tính hiệu quả cao.
            Chương trình được biên soạn theo năm cấp độ, từ cấp độ cơ bản dành cho những người mới bắt đầu, với 350 từ, cho đến cấp độ trung bình khá, với 1.000 từ. Trong từng tập sách đều có các hướng dẫn dành cho người đọc theo từng cấp độ, giúp họ tiếp cận nội dung tác phẩm bằng tiếng Anh một cách dễ dàng hơn.',
            'avatar' => 'truyen_thieu_nhi_9.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 29.000,
            'author' => 'Jules Verne',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'The Arabian Nights - Nghìn lẻ một đêm',
            'description' => 'Nghìn lẻ một đêm, tác phẩm vĩ đại bậc nhất của nền văn học Ả Rập từ cổ chí kim, là một trong những công trình sáng tạo đồ sộ và tuyệt diệu của nền văn học thế giới. Macxim Gorki từng ca ngợi: “Trong các di sản tuyệt diệu của sáng tác truyền khẩu dân gian, các câu chuyện cổ tích của nàng Sêhêrazát là di sản đồ sộ nhất.
            Những câu chuyện này thể hiện ở mức hoàn hảo diệu kỳ, xu hướng của người dân lao động muốn buông mình theo “phép nhiệm mầu của những ảo giác êm đẹp”, trong sự kết hợp phóng khoáng của những ngôn từ mang sức mạnh tưởng tượng huyền ảo của các dân tộc phương Đông - Ả Rập, Ba Tư, Ấn Độ. Công trình thêu hoa dệt gấm bằng từ ngữ này đã xuất hiện từ rất xa xưa, nhưng đến nay những sợi tơ muôn màu của nó vẫn lan khắp bốn phương, phủ lên trái đất một tấm thảm ngôn từ đẹp đẽ lạ lùng.”
            Các câu chuyện cứ nối tiếp vào nhau, truyện sau lồng vào truyện trước. Truyện này chưa hết truyện khác đã bắt đầu dường như vô tận. Trước mắt chúng ta hiện lên không biết bao nhiêu là nhân vật: từ hoàng đế, tể tưởng, hoàng tử, vương tôn, quan cai ngục, viên hoạn nô, tên cướp biển…
            Tất cả được liên kết thành một chuỗi ngọc tuyệt tác muôn vẻ muôn màu qua lời kể của người con gái tài sắc vẹn toàn, thông minh rất mực, không quản hiểm nguy dám hy sinh tấm thân ngà ngọc của mình để cứu các bạn gái khỏi cảnh ô nhục và cái chết bi thương.',
            'avatar' => 'truyen_thieu_nhi_10.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 29.000,
            'author' => 'Đang cập nhật',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Great Speeches - Những bài diễn văn nổi tiếng thế giới',
            'description' => 'Sách Great speeches – Những bài diễn văn nổi tiếng thế giới nằm trong bộ sách Let’s Enjoy Masterpieces! được biên soạn theo một chương trình đặc biệt giúp nâng cao kỹ năng đọc hiểu cho những người mới bắt đầu, những người chưa hài lòng với khả năng làm chủ ngôn ngữ của mình, hay cho học sinh cấp tiểu học, trung học cơ sở và phổ thông. Những học viên này sẽ thưởng thức các kiệt tác văn học bằng tiếng Anh theo một hình thức rất thú vị và có tính hiệu quả cao.
            Chương trình được soạn theo năm cấp độ, từ cấp độ cơ bản dành cho những người mới bắt đầu, với 350 từ, cho đến cấp độ trung bình khá, với 1.000 từ. Trong từng tập sách đều có các hướng dẫn dành cho người đọc theo từng cấp độ, giúp họ tiếp cận nội dung của tác phẩm bằng tiếng Anh một cách dễ dàng hơn.',
            'avatar' => 'truyen_thieu_nhi_11.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 29.000,
            'author' => 'Đang cập nhật',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Anna Karenina',
            'description' => 'Bốn năm sau khi viết xong tiểu thuyết Chiến tranh và hòa bình, khoảng 19 tháng 03 năm 1873 Tolstoy bắt đầu viết Anna Karenina. Sau khi hoàn thành, cuốn tiểu thuyết này đã đưa nhà văn lên một địa vị mới trên văn đàn văn học Nga và thế giới. Anna Karenina lập tức được xem là một trong những tiểu thuyết hay nhất của nên văn học nhân loại.
            Ý nghĩa xã hội và tác dụng nhận thức các vấn đề lớn do cuốn truyện đặt ra đã được thể hiện bằng một ngòi bút điêu luyện bậc thầy. Vượt ra ngoài khuôn khổ của một tấn thảm kịch ngoại tình. Anna Karenina đã trở thành một bộ Bách khoa thư về đời sống xã hội. Bạn đã yêu Leo Tolstoy qua Chiến tranh và hòa bình? Vậy hãy đọc Anna Karenina để một lần nữa thấy được tư tưởng cũng như tài năng văn chương của ông.',
            'avatar' => 'truyen_thieu_nhi_12.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 29.000,
            'author' => 'Lev Tolstoy',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Nước mắt cá sấu',
            'description' => 'Truyện đồng thoại đã trở thành người bạn thân thiết của tuổi thơ, là suối nguồn tinh thần không thể thiếu trong quá trình trưởng thành của mỗi con người. Nhân vật trong truyện đồng thoại rất đa dạng không chỉ là con người mà còn có đủ các loài vật, cỏ cây, hoa lá cho đến những vật vô tri vô giác như cây kim sợi chỉ, đoàn tàu... được nhân cách hóa, cách điệu hóa. Truyện đồng thoại ngắn gọn, đậm chất mơ tưởng, vì thế nó có khả năng khơi dậy ở trẻ nhỏ những cảm xúc thú vị, bất ngờ. Đồng thời truyện giúp trẻ từ một thính giả thụ động trở thành một người tham gia tích cực vào sự kiện của các nhân vật, hòa nhập vào thế giới tuổi thơ hồn nhiên, ngộ nghĩnh.
            Thông qua những câu chuyện hết sức sinh động đó, tâm hồn các em được bồi đắp, trí tuệ phát triển, trẻ biết nhận thức về cái đẹp, yêu cái đẹp và căm ghét cái xấu... Hy vọng cuốn sách là món quà ý nghĩa gửi tặng đến những độc giả nhỏ tuổi đáng yêu!',
            'avatar' => 'truyen_thieu_nhi_13.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 31.000,
            'author' => 'Đang cập nhật',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'The little match girl',
            'description' => 'The little match girl - Cô bé bán diêm là truyện cổ tích do tác giả người Đan Mạch Hans Christian Andersen sáng tác. Truyện kể về một cô bé nghèo khổ phải đi bán diêm giữa mùa đông giá lạnh và từ giã cõi đời trong đêm Chúa giáng sinh.',
            'avatar' => 'truyen_thieu_nhi_14.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 31.000,
            'author' => 'Hans Christian Andersen',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '20%'
        ]);
        Product::create([
            'name' => 'Happy Reader - Beauty and the beast (Giai nhân và Quái vật)',
            'description' => 'Những câu chuyện cổ tích, những kiệt tác văn học tuyệt vời mà chúng ta đã biết từ thuở còn thơ vẫn luôn là kỷ niệm ấm áp mãi cho đến khi ta trưởng thành. Giờ đây, các tác phẩm văn học kinh điển được thể hiện dưới một hình thức mới mẻ và thú vị sẽ giúp ta làm sống lại những kỷ niệm đó. Bên cạnh đó, ta còn có thể thưởng thức sự sâu sắc và vẻ đẹp của những tác phẩm nguyên bản, điều mà các tác phẩm chuyển ngữ ít khi thực hiện được. Trong quá trình đọc sách, kỹ năng nghe hiểu tiếng Anh của bạn cũng sẽ được nâng cao rất nhiều.
            Bộ sách được biên soạn theo một chương trình đặc biệt giúp nâng cao kỹ năng đọc hiểu cho những người mới bắt đầu, những người chưa hài lòng với khả năng làm chủ ngôn ngữ của mình, hay cho học sinh cấp tiểu học, trung học cơ sở và phổ thông. Những học viên này sẽ thưởng thức các kiệt tác văn học bằng tiếng Anh theo một hình thức rất thú vị và có tính hiệu quả cao.
            Chương trình được biên soạn theo năm cấp độ, từ cấp độ cơ bản dành cho những người mới bắt đầu, với 350 từ, cho đến cấp độ trung bình khá, với 1.000 từ. Trong từng tập sách đều có các hướng dẫn dành cho người đọc theo từng cấp độ, giúp họ tiếp cận nội dung tác phẩm bằng tiếng Anh một cách dễ dàng hơn.',
            'avatar' => 'truyen_thieu_nhi_15.jpg',
            'pro_att_id' => 'Thiếu nhi',
            'pro_cate_id' => 'Sách nói',
            'price' => 36.000,
            'author' => 'Beaumint M',
            'pro_pub_id' => 'NXB Thông Tin Và Truyền Thông',
            'sale' => '21%'
        ]);
    }
}