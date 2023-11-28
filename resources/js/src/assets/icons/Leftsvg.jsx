import img_1 from "../images/Image2.png";

export default function Logo({ width = "118px", height = "98px" }) {
    return <img src={img_1} style={{ width: { width }, height: { height } }} />;
}
