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
            'name' => '[Tóm tắt sách] Nghề nào cho bạn nghề nào cho tôi',
            'description' => 'Đây là bản tóm tắt của sách Nghề nào cho bạn nghề nào cho tôi. Các nội dung trong sách đã được Alpha Books giản lược một cách ngắn gọn và cô đọng nhất song tổng thể vẫn đầy đủ so với bản gốc.
            Tóm tắt cuốn sách "Nghề Nào Cho Bạn Nghề Nào Cho Tôi": "Với hàng nghìn người Mỹ, kiệt tác dài 276 trang của Shoya Zichy, cuốn Nghề Nào Cho Bạn Nghề Nào Cho Tôi đã cùng lúc chấm dứt bóng ma khiếp đảm của nạn thất nghiệp và làm thoả mãn những người đang buồn rầu trước sự biến đổi phức tạp của nền kinh tế quốc gia và thế giới..."
            Tính cách phản ánh hành động tưởng như là chuyện bình thường, nhưng thực tế, hầu hết mọi người đều không có được công việc thực sự phù hợp với tính cách của họ. Career Match sẽ cùng bạn thực hiện bài tự kiểm tra đơn giản trong 10 phút để xác định kiểu tính cách cụ thể của bạn, từ đó giúp bạn:
            Xác định được các loại công việc sẽ gây hứng thú và đem lại niềm vui cho bạn
            Xác định ông chủ phù hợp và môi trường làm việc bạn cần phát triển
            Xác nhận tính đúng đắn của con đường bạn đang đi hoặc giúp bạn tìm thấy một hướng mới tốt hơn.
            Nếu công việc bạn đang làm không khiến bạn thấy thực sự hồ hởi và say mê, thì đã đến lúc bạn nên nghĩ đến một nghề khác. Hãy đọc kỹ cuốn sách, bạn sẽ thấy những lời giải thích hợp lý về lựa chọn nghề nghiệp và những câu chuyện có thật về những người đã thực sự cảm thấy hài lòng vì công việc phù hợp với tính cách của họ, và họ đã gặt hái được nhiều thành công với nghề nghiệp đó.',
            'avatar' => 'huong_nghiep_16.jpg',
            'pro_att_id' => 'Kỹ năng làm việc',
            'pro_cate_id' => 'Kỹ năng',
            'price' => 20.000,
            'author' => 'Shoya Zichy - Ann Bidou',
            'pro_pub_id' => 'NXB Lao Động Xã Hội',
            'sale' => '30%'
        ]);
    }
}